#include<iostream>
using namespace std;


void selection_sort(int [], int);
int main()
{

	int array[] = {10,9,8,7,6,5,4,3,2,1,5};
	int i,j,temp;

	for(int i=0 ; i<10; i++)
	{
        for(j=i+1;j<10;j++)
        {
            if(array[j]<array[i])
            {
                temp = array[i];
                array[i] = array[j];
                array[j] = temp;

            }
        }
	}

	for(i=0;i<10;i++)
	{
        cout<<array[i]<<"\n";
	}


	return 0;
}

