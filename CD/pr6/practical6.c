#include<stdio.h>
int ninputs;
int check(char,int); //function declaration
int dfa[10][10];
char c[10], string[10];
int main()
{
int nstates,nfinals;
int f[10];
int i,j,s=0,final=0;
printf("Enter the number of states that your DFA consist of \n");
scanf("%d",&nstates);
printf("\nEnter the number of input symbol that DFA have \n");
scanf("%d",&ninputs);
printf("\nEnter the input symbols\t");
for(i=0; i<ninputs; i++)
{
    printf("\n\n %d input\t", i+1);
    while ((getchar()) != '\n');
    c[i]=getchar();
}
printf("\n\nenter number of final states\t");
scanf("%d",&nfinals);
for(i=0;i<nfinals;i++)
{
printf("\n\nFinal state %d : q",i+1);
scanf("%d",&f[i]);
}
printf(" ");
printf("\n\ndefine transition rule as (Initial State, Input Symbol ) = Final State\n");
for(i=0;i<ninputs; i++)
{
for(j=0;j<nstates; j++)
{
printf("\n(q%d , %c ) = q",j,c[i]);
scanf("%d",&dfa[i][j]);
}
}
i=0;
printf("\n\nEnter Input String\t");
scanf("%s",string);
while(string[i]!='\0')
if((s=check(string[i++],s))<0)
break;
for(i=0 ;i<nfinals ;i++)
if(f[i] ==s )
final=1;
if(final==1)
printf("\n Valid String\n");
else
printf("\n Invalid String\n");
getchar();
return 0;
}

int check(char b,int d)
{
int j;
for(j=0; j<ninputs; j++)
if(b==c[j])
return(dfa[d][j]);
return -1;
}
