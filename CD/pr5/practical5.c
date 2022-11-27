#include<stdio.h>
#include<ctype.h> 
#include<string.h> 
int main() 
 { 
  char a[20]; 
  int i=4,n;
  printf("\nENTER ANY EXPRESSION:"); 
  scanf("%s", a); 
  n=strlen(a); 
  printf("\n**********************GENERATED CODE*************************\n"); 
  if(isalpha(a[4])||isdigit(a[4])) 
      printf("\n\t\t\t\tMOV A,%c\n",a[i]); 
      i+=2; 
     while(i<n) 
     { 
       switch(a[i]) 
        { 
            
           case '*':printf("\t\t\t\tMUL A,B\n"); 
           i+=2; 
           break; 
           case '/':printf("\t\t\t\tDIV A,B\n"); 
           i+=2; 
           break; 
           case '+':printf("\t\t\t\tADD A,B\n"); 
           i+=2; 
           break; 
           case '-':printf("\t\t\t\tSUB A,B\n"); 
           i+=2; 
           break; 
           default:if(isalpha(a[i])) 
                       printf("\t\t\t\tMOV B,%c\n",a[i]); 
                   else 
                       printf("\t\t\t\tMOV A,%c\n",a[i]); 
                       i--; 
         } 
      } 
   i=2; 
   if(isalpha(a[i])||isdigit(a[i])) 
      printf("\n\t\t\t\tMOV C,%c\n",a[i]); 
      i=3; 
      while(i<n) 
      { 
         switch(a[i]) 
          { 
            case '*':printf("\t\t\t\tMUL C,A\n"); 
                     i+=4; 
                     break; 
            case '/':printf("\t\t\t\tDIV C,A\n"); 
                     i+=4;
                     break; 
        case '+':printf("\t\t\t\tADD C,A\n"); 
               i+=4; 
               break; 
        case '-':printf("\t\t\t\tSUB C,A\n"); 
                 i+=4; 
                  break; 
        default:if(isalpha(a[i])) 
                  printf("\t\t\t\tMOV B,%c\n",a[i]); 
                else 
                   printf("\t\t\t\tMOV A,%c\n",a[i]); 
                   i--; 
       } 
    } 
  i=0; 
  printf("\t\t\t\tMOV %c,A\n",a[i]); 
  return 0; 
}
