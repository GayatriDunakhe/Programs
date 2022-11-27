%{
    #include<stdio.h>
%}

%%
printf("Please Enter Any Character\t");
[0|1]+ {printf("%s is Binary Number\t",yytext);}
[0-7]+ {printf("%s is Octal Number\t",yytext);}
[0-9]* {printf("%s is Decimal Number\t",yytext);}
[0-9 A-F a-f]+ {printf("%s is Hexa Decimal Number\t",yytext);}
[eE][-+]?[0-9]* {printf("%s is Exponential Number\t",yytext);}
[0-9]+\. {printf("%s is a Not Valid Number\t",yytext);}
[0-9]*\.[0-9]+ {printf("%s is Floating Point Number\t",yytext);}
[g-zG-Z]+ {printf("%s is an Invalid Character\t",yytext);}
%%

int main()
{
 yylex();
 return 0;
}
int yywrap()
{
}
