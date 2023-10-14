#include <iostream.h>

using namespace std; 

int main() {

float array[10];

float avg; float max=0;

for(int i=0; i<10;i++)
{

cout<<"enter cgpa between 0.0 and 4.0...";

cin>>array[i];

avg +=array[i];

if (array[i]>max)
{

max = array[i];

}

}
cout<<"maximum CGPA is "<<max<<endl;

cout<<"average is "<<avg/10;
}