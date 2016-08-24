<?php
namespace App\Jobs;
use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
class SendSMS extends Job implements SelfHandling, ShouldQueue
{
    use SerializesModels, InteractsWithQueue;
    /**
     * @var
     */
    private $phone;
    /**
     * @var
     */
    private $message;
    /**
     * Create a new job instance.
     *
     * @param $phone
     * @param $message
     */
    public function __construct(array $phone, $message)
    {
        $this->phone = implode(',',$phone);
        $this->message = $message;
        echo $this->message;
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //Your authentication key
        $authKey = env('MSG_API_KEY');
        //Define route
        $route = "4";

        //Sender ID,While using route4 sender id should be 6 characters long.
        $senderId = "GDGVIT";
        //Prepare you post parameters
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $this->phone,
            'message' => $this->message,
            'sender' => $senderId,
            'route' => $route
        );
        //API URL
        $url = "https://control.msg91.com/api/sendhttp.php";
        // init the resource
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            //,CURLOPT_FOLLOWLOCATION => true
        ));
        //Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        //get response
        $output = curl_exec($ch);
        curl_close($ch);
    }
}