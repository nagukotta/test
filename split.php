<?php

char token[20];
char arr[]="This is the string"
char delimiter = ' ';
int i,j;
 
for(i=0; arr[i]; i++)
{
    if(arr[i]==delimiter)
        continue;
    j=0;
    while(1)
    {
        token[j]=arr[i];
        i++;
        j++;
        if(arr[i]==delimiter || arr[i]=='\0')
        {
            token[j]='\0';
            printf("℅s\n", token);
            break;
        }
    }
    if(arr[i]=='\0')
        break;
		
		
		?>