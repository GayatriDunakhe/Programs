### Run ATL Programs on browser-

Add your all file in xampp htdocs folder

on browser put this -

```python
localhost/filename.html

if your created your own folder in htdocs foled then-

localhost/foldername/filename.html
```

Never forget to on apache and mysql on xampp control panel

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
