### Run CD programs on terminals-

Window - 

```python
flex program_name.l
gcc lex.yy.c
./a.exe
```

Linux - 

```python
lex program_name.l
cc lex.yy.c -ll
./a.out

if program containt .y file- 

lex program_name.l
yacc -d program_name.y
cc lex.yy.c y.tab.c -ll
./a.out

```
