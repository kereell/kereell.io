let SessionLoad = 1
if &cp | set nocp | endif
let s:so_save = &so | let s:siso_save = &siso | set so=0 siso=0
let v:this_session=expand("<sfile>:p")
silent only
cd /var/www/kereell.io
if expand('%') == '' && !&modified && line('$') <= 1 && getline(1) == ''
  let s:wipebuf = bufnr('%')
endif
set shortmess=aoO
badd +1 module/User/src/Factory/Controller/UserControllerFactory.php
badd +1 module/User/src/Controller/UserController.php
badd +1 module/User/test/Controller/UserControllerTest.php
badd +1 module/User/src/Factory/InputFilter/UserRegistrationInputFilterFactory.php
badd +1 module/User/src/InputFilter/UserRegistrationInputFilter.php
badd +1 module/User/src/Factory/Form/UserRegistrationFormFactory.php
badd +1 module/User/src/Form/UserRegistrationForm.php
badd +1 module/User/test/Form/UserRegistrationFormTest.php
badd +1 module/User/test/InputFilter/UserRegistrationInputFilterTest.php
badd +14 module/User/src/Factory/Session/UserSessionFactory.php
badd +1 module/User/src/Factory/Form/UserRegistrationCaptchaFactory.php
badd +24 vendor/zendframework/zendservice-recaptcha/test/ReCaptchaTest.php
badd +1 vendor/zendframework/zendservice-recaptcha/test/ResponseTest.php
badd +1 module/User/src/Factory/Authentication
badd +1 module/User/src/Factory/Model
badd +18 vendor/zendframework/zend-form/src/Element/Checkbox.php
badd +366 vendor/zendframework/zend-form/src/Element.php
badd +34 vendor/zendframework/zend-form/src/Element/Csrf.php
badd +0 vendor/zendframework/zend-validator/src/Csrf.php
argglobal
silent! argdel *
$argadd module/User/src/Factory/Authentication
$argadd module/User/src/Factory/Controller/
$argadd module/User/src/Factory/Form/
$argadd module/User/src/Factory/InputFilter/
$argadd module/User/src/Factory/Model
$argadd module/User/src/Factory/Session/
edit module/User/src/Factory/Controller/UserControllerFactory.php
set splitbelow splitright
wincmd _ | wincmd |
vsplit
wincmd _ | wincmd |
vsplit
wincmd _ | wincmd |
vsplit
3wincmd h
wincmd _ | wincmd |
split
wincmd _ | wincmd |
split
2wincmd k
wincmd w
wincmd w
wincmd w
wincmd _ | wincmd |
split
wincmd _ | wincmd |
split
2wincmd k
wincmd w
wincmd w
wincmd w
wincmd _ | wincmd |
split
wincmd _ | wincmd |
split
wincmd _ | wincmd |
split
3wincmd k
wincmd w
wincmd w
wincmd w
wincmd w
wincmd _ | wincmd |
split
wincmd _ | wincmd |
split
2wincmd k
wincmd w
wincmd w
wincmd t
set winminheight=1 winheight=1 winminwidth=1 winwidth=1
exe '1resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 1resize ' . ((&columns * 67 + 136) / 272)
exe '2resize ' . ((&lines * 23 + 36) / 72)
exe 'vert 2resize ' . ((&columns * 67 + 136) / 272)
exe '3resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 3resize ' . ((&columns * 67 + 136) / 272)
exe '4resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 4resize ' . ((&columns * 67 + 136) / 272)
exe '5resize ' . ((&lines * 23 + 36) / 72)
exe 'vert 5resize ' . ((&columns * 67 + 136) / 272)
exe '6resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 6resize ' . ((&columns * 67 + 136) / 272)
exe '7resize ' . ((&lines * 16 + 36) / 72)
exe 'vert 7resize ' . ((&columns * 68 + 136) / 272)
exe '8resize ' . ((&lines * 17 + 36) / 72)
exe 'vert 8resize ' . ((&columns * 68 + 136) / 272)
exe '9resize ' . ((&lines * 17 + 36) / 72)
exe 'vert 9resize ' . ((&columns * 68 + 136) / 272)
exe '10resize ' . ((&lines * 16 + 36) / 72)
exe 'vert 10resize ' . ((&columns * 68 + 136) / 272)
exe '11resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 11resize ' . ((&columns * 67 + 136) / 272)
exe '12resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 12resize ' . ((&columns * 67 + 136) / 272)
exe '13resize ' . ((&lines * 23 + 36) / 72)
exe 'vert 13resize ' . ((&columns * 67 + 136) / 272)
argglobal
2argu
edit module/User/src/Factory/Controller/UserControllerFactory.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
12
normal! zo
14
normal! zo
15
normal! zo
26
normal! zo
let s:l = 28 - ((16 * winheight(0) + 11) / 22)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
28
normal! 028|
lcd /var/www/kereell.io
wincmd w
argglobal
2argu
edit /var/www/kereell.io/module/User/src/Controller/UserController.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
10
normal! zo
12
normal! zo
13
normal! zo
28
normal! zo
35
normal! zo
41
normal! zo
45
normal! zo
50
normal! zo
50
normal! zo
54
normal! zo
54
normal! zo
let s:l = 58 - ((18 * winheight(0) + 11) / 23)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
58
normal! 0
lcd /var/www/kereell.io
wincmd w
argglobal
2argu
edit /var/www/kereell.io/module/User/test/Controller/UserControllerTest.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
12
normal! zo
46
normal! zo
49
normal! zo
56
normal! zo
let s:l = 50 - ((39 * winheight(0) + 11) / 22)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
50
normal! 05|
lcd /var/www/kereell.io
wincmd w
argglobal
3argu
edit /var/www/kereell.io/module/User/src/Factory/InputFilter/UserRegistrationInputFilterFactory.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
12
normal! zo
15
normal! zo
let s:l = 20 - ((9 * winheight(0) + 11) / 22)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
20
normal! 03|
lcd /var/www/kereell.io
wincmd w
argglobal
3argu
edit /var/www/kereell.io/module/User/src/InputFilter/UserRegistrationInputFilter.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
12
normal! zo
15
normal! zo
16
normal! zo
26
normal! zo
29
normal! zo
32
normal! zo
33
normal! zo
40
normal! zo
43
normal! zo
44
normal! zo
47
normal! zo
50
normal! zo
54
normal! zo
55
normal! zo
61
normal! zo
64
normal! zo
69
normal! zo
73
normal! zo
74
normal! zo
76
normal! zo
82
normal! zo
88
normal! zo
91
normal! zo
92
normal! zo
98
normal! zo
108
normal! zo
let s:l = 90 - ((6 * winheight(0) + 11) / 23)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
90
normal! 027|
lcd /var/www/kereell.io
wincmd w
argglobal
3argu
edit /var/www/kereell.io/module/User/test/InputFilter/UserRegistrationInputFilterTest.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
13
normal! zo
16
normal! zo
21
normal! zo
27
normal! zo
100
normal! zo
102
normal! zo
103
normal! zo
108
normal! zo
109
normal! zo
115
normal! zo
117
normal! zo
119
normal! zo
125
normal! zo
let s:l = 22 - ((7 * winheight(0) + 11) / 22)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
22
normal! 037|
lcd /var/www/kereell.io
wincmd w
argglobal
4argu
edit /var/www/kereell.io/module/User/src/Factory/Form/UserRegistrationFormFactory.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
12
normal! zo
15
normal! zo
16
normal! zo
24
normal! zo
let s:l = 26 - ((1 * winheight(0) + 8) / 16)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
26
normal! 041|
lcd /var/www/kereell.io
wincmd w
argglobal
4argu
edit /var/www/kereell.io/module/User/src/Factory/Form/UserRegistrationCaptchaFactory.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
11
normal! zo
14
normal! zo
15
normal! zo
let s:l = 23 - ((12 * winheight(0) + 8) / 17)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
23
normal! 019|
lcd /var/www/kereell.io
wincmd w
argglobal
4argu
edit /var/www/kereell.io/module/User/src/Form/UserRegistrationForm.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
10
normal! zo
15
normal! zo
16
normal! zo
24
normal! zo
29
normal! zo
33
normal! zo
36
normal! zo
43
normal! zo
46
normal! zo
52
normal! zo
55
normal! zo
61
normal! zo
64
normal! zo
68
normal! zo
71
normal! zo
75
normal! zo
78
normal! zo
29
normal! zo
33
normal! zo
36
normal! zo
43
normal! zo
46
normal! zo
52
normal! zo
55
normal! zo
61
normal! zo
64
normal! zo
68
normal! zo
71
normal! zo
75
normal! zo
78
normal! zo
81
normal! zo
78
normal! zo
82
normal! zo
85
normal! zo
let s:l = 81 - ((8 * winheight(0) + 8) / 17)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
81
normal! 026|
lcd /var/www/kereell.io
wincmd w
argglobal
4argu
edit /var/www/kereell.io/module/User/test/Form/UserRegistrationFormTest.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
11
normal! zo
14
normal! zo
25
normal! zo
29
normal! zo
33
normal! zo
let s:l = 28 - ((3 * winheight(0) + 8) / 16)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
28
normal! 0
lcd /var/www/kereell.io
wincmd w
argglobal
6argu
edit /var/www/kereell.io/module/User/src/Factory/Session/UserSessionFactory.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
10
normal! zo
13
normal! zo
14
normal! zo
let s:l = 17 - ((2 * winheight(0) + 11) / 22)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
17
normal! 0
lcd /var/www/kereell.io
wincmd w
argglobal
6argu
edit /var/www/kereell.io/vendor/zendframework/zend-validator/src/Csrf.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
12
normal! zo
17
normal! zo
17
normal! zo
19
normal! zo
19
normal! zo
25
normal! zo
29
normal! zo
33
normal! zo
40
normal! zo
48
normal! zo
55
normal! zo
61
normal! zo
66
normal! zo
72
normal! zo
241
normal! zo
let s:l = 262 - ((74 * winheight(0) + 11) / 22)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
262
normal! 0
lcd /var/www/kereell.io
wincmd w
argglobal
6argu
edit /var/www/kereell.io/vendor/zendframework/zend-validator/src
setlocal fdm=syntax
setlocal fde=0
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
let s:l = 15 - ((8 * winheight(0) + 11) / 23)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
15
normal! 0
lcd /var/www/kereell.io
wincmd w
5wincmd w
exe '1resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 1resize ' . ((&columns * 67 + 136) / 272)
exe '2resize ' . ((&lines * 23 + 36) / 72)
exe 'vert 2resize ' . ((&columns * 67 + 136) / 272)
exe '3resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 3resize ' . ((&columns * 67 + 136) / 272)
exe '4resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 4resize ' . ((&columns * 67 + 136) / 272)
exe '5resize ' . ((&lines * 23 + 36) / 72)
exe 'vert 5resize ' . ((&columns * 67 + 136) / 272)
exe '6resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 6resize ' . ((&columns * 67 + 136) / 272)
exe '7resize ' . ((&lines * 16 + 36) / 72)
exe 'vert 7resize ' . ((&columns * 68 + 136) / 272)
exe '8resize ' . ((&lines * 17 + 36) / 72)
exe 'vert 8resize ' . ((&columns * 68 + 136) / 272)
exe '9resize ' . ((&lines * 17 + 36) / 72)
exe 'vert 9resize ' . ((&columns * 68 + 136) / 272)
exe '10resize ' . ((&lines * 16 + 36) / 72)
exe 'vert 10resize ' . ((&columns * 68 + 136) / 272)
exe '11resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 11resize ' . ((&columns * 67 + 136) / 272)
exe '12resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 12resize ' . ((&columns * 67 + 136) / 272)
exe '13resize ' . ((&lines * 23 + 36) / 72)
exe 'vert 13resize ' . ((&columns * 67 + 136) / 272)
tabnext 1
if exists('s:wipebuf')
  silent exe 'bwipe ' . s:wipebuf
endif
unlet! s:wipebuf
set winheight=1 winwidth=20 shortmess=filnxtToO
set winminheight=1 winminwidth=1
let s:sx = expand("<sfile>:p:r")."x.vim"
if file_readable(s:sx)
  exe "source " . fnameescape(s:sx)
endif
let &so = s:so_save | let &siso = s:siso_save
let g:this_session = v:this_session
let g:this_obsession = v:this_session
let g:this_obsession_status = 2
doautoall SessionLoadPost
unlet SessionLoad
" vim: set ft=vim :
