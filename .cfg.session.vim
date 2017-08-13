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
badd +1 module/User/src/Module.php
badd +1 config/autoload/local.php
badd +1 config/application.config.php
badd +1 config/modules.config.php
badd +1 config/autoload/doctrine.module.config.php
badd +1 module/User/config/module.config.php
argglobal
silent! argdel *
$argadd module/User/src/Module.php
edit module/User/src/Module.php
set splitbelow splitright
wincmd _ | wincmd |
vsplit
wincmd _ | wincmd |
vsplit
2wincmd h
wincmd _ | wincmd |
split
1wincmd k
wincmd w
wincmd w
wincmd _ | wincmd |
split
1wincmd k
wincmd w
wincmd w
wincmd _ | wincmd |
split
1wincmd k
wincmd w
wincmd t
set winminheight=1 winheight=1 winminwidth=1 winwidth=1
exe '1resize ' . ((&lines * 34 + 36) / 72)
exe 'vert 1resize ' . ((&columns * 90 + 136) / 272)
exe '2resize ' . ((&lines * 34 + 36) / 72)
exe 'vert 2resize ' . ((&columns * 90 + 136) / 272)
exe '3resize ' . ((&lines * 34 + 36) / 72)
exe 'vert 3resize ' . ((&columns * 90 + 136) / 272)
exe '4resize ' . ((&lines * 34 + 36) / 72)
exe 'vert 4resize ' . ((&columns * 90 + 136) / 272)
exe '5resize ' . ((&lines * 34 + 36) / 72)
exe 'vert 5resize ' . ((&columns * 90 + 136) / 272)
exe '6resize ' . ((&lines * 34 + 36) / 72)
exe 'vert 6resize ' . ((&columns * 90 + 136) / 272)
argglobal
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
23
normal! zo
let s:l = 78 - ((55 * winheight(0) + 17) / 34)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
78
normal! 0
wincmd w
argglobal
edit module/User/config/module.config.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
9
normal! zo
10
normal! zo
11
normal! zo
12
normal! zo
14
normal! zo
16
normal! zo
20
normal! zo
28
normal! zo
34
normal! zo
40
normal! zo
let s:l = 1 - ((0 * winheight(0) + 17) / 34)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
1
normal! 011|
wincmd w
argglobal
edit config/autoload/local.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
2
normal! zo
14
normal! zo
15
normal! zo
25
normal! zo
26
normal! zo
28
normal! zo
39
normal! zo
let s:l = 13 - ((12 * winheight(0) + 17) / 34)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
13
normal! 0
wincmd w
argglobal
edit config/autoload/doctrine.module.config.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
8
normal! zo
20
normal! zo
28
normal! zo
29
normal! zo
let s:l = 10 - ((9 * winheight(0) + 17) / 34)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
10
normal! 05|
wincmd w
argglobal
edit config/application.config.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
2
normal! zo
8
normal! zo
13
normal! zo
18
normal! zo
26
normal! zo
27
normal! zo
27
normal! zo
27
normal! zo
27
normal! zo
56
normal! zo
57
normal! zo
let s:l = 61 - ((26 * winheight(0) + 17) / 34)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
61
normal! 09|
wincmd w
argglobal
edit config/modules.config.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
2
normal! zo
8
normal! zo
13
normal! zo
let s:l = 27 - ((0 * winheight(0) + 17) / 34)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
27
normal! 04|
wincmd w
3wincmd w
exe '1resize ' . ((&lines * 34 + 36) / 72)
exe 'vert 1resize ' . ((&columns * 90 + 136) / 272)
exe '2resize ' . ((&lines * 34 + 36) / 72)
exe 'vert 2resize ' . ((&columns * 90 + 136) / 272)
exe '3resize ' . ((&lines * 34 + 36) / 72)
exe 'vert 3resize ' . ((&columns * 90 + 136) / 272)
exe '4resize ' . ((&lines * 34 + 36) / 72)
exe 'vert 4resize ' . ((&columns * 90 + 136) / 272)
exe '5resize ' . ((&lines * 34 + 36) / 72)
exe 'vert 5resize ' . ((&columns * 90 + 136) / 272)
exe '6resize ' . ((&lines * 34 + 36) / 72)
exe 'vert 6resize ' . ((&columns * 90 + 136) / 272)
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
