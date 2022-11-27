%{
    #include<stdio.h>
    int flag=0;
    int yylex();
    int yyerror();
    
%}
%token One Zero N1

%%
S:B N1 {printf("The String is Valid\n"); return 0;};
B:Zero B|One B|Zero|One;

%%

int main()
{
    printf("Please enter any string in a format 0 or 1 \n");
    yyparse();
}
int yyerror()
{
    printf("Error\n");
    return 0;
}
