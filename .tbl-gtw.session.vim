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
badd +1 module/User/src/Factory/Model/TableGateway/UserAclTableGatewayFactory.php
badd +1 module/User/src/Factory/Model/TableGateway/UserCredentialsTableGatewayFactory.php
badd +1 module/User/src/Factory/Model/TableGateway/UserDetailsTableGatewayFactory.php
badd +1 module/User/src/Factory/Model/TableGateway/UserRolesTableGatewayFactory.php
badd +1 module/User/src/Model/TableGateway/UserCredentialsTableGateway.php
badd +1 module/User/src/Model/Entity/UserCredentials.php
badd +3 module/User/test/Model/UserCredentialsTableGatewayTest.php
badd +1 module/User/src/Model/Entity/UserDetails.php
badd +1 module/User/test/Model/UserDetailsTest.php
badd +1 module/User/src/Model/Entity/UserAcl.php
badd +1 module/User/test/Model/UserAclTest.php
badd +1 module/User/src/Model/Entity/UserRoles.php
badd +1 module/User/test/Model/UserRolesTest.php
badd +1 module/User/test/Model/UserCredentialsTest.php
argglobal
silent! argdel *
$argadd module/User/src/Factory/Model/TableGateway/UserAclTableGatewayFactory.php
$argadd module/User/src/Factory/Model/TableGateway/UserCredentialsTableGatewayFactory.php
$argadd module/User/src/Factory/Model/TableGateway/UserDetailsTableGatewayFactory.php
$argadd module/User/src/Factory/Model/TableGateway/UserRolesTableGatewayFactory.php
edit module/User/src/Factory/Model/TableGateway/UserCredentialsTableGatewayFactory.php
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
2wincmd k
wincmd w
wincmd w
wincmd t
set winminheight=1 winheight=1 winminwidth=1 winwidth=1
exe '1resize ' . ((&lines * 17 + 36) / 72)
exe 'vert 1resize ' . ((&columns * 68 + 136) / 272)
exe '2resize ' . ((&lines * 16 + 36) / 72)
exe 'vert 2resize ' . ((&columns * 68 + 136) / 272)
exe '3resize ' . ((&lines * 17 + 36) / 72)
exe 'vert 3resize ' . ((&columns * 68 + 136) / 272)
exe '4resize ' . ((&lines * 16 + 36) / 72)
exe 'vert 4resize ' . ((&columns * 68 + 136) / 272)
exe '5resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 5resize ' . ((&columns * 67 + 136) / 272)
exe '6resize ' . ((&lines * 23 + 36) / 72)
exe 'vert 6resize ' . ((&columns * 67 + 136) / 272)
exe '7resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 7resize ' . ((&columns * 67 + 136) / 272)
exe '8resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 8resize ' . ((&columns * 67 + 136) / 272)
exe '9resize ' . ((&lines * 23 + 36) / 72)
exe 'vert 9resize ' . ((&columns * 67 + 136) / 272)
exe '10resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 10resize ' . ((&columns * 67 + 136) / 272)
exe '11resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 11resize ' . ((&columns * 67 + 136) / 272)
exe '12resize ' . ((&lines * 23 + 36) / 72)
exe 'vert 12resize ' . ((&columns * 67 + 136) / 272)
exe '13resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 13resize ' . ((&columns * 67 + 136) / 272)
argglobal
2argu
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
14
normal! zo
17
normal! zo
18
normal! zo
28
normal! zo
33
normal! zo
41
normal! zo
let s:l = 34 - ((9 * winheight(0) + 8) / 17)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
34
normal! 07|
wincmd w
argglobal
2argu
edit module/User/src/Model/TableGateway/UserCredentialsTableGateway.php
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
let s:l = 13 - ((5 * winheight(0) + 8) / 16)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
13
normal! 02|
wincmd w
argglobal
2argu
edit module/User/src/Model/Entity/UserCredentials.php
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
13
normal! zo
15
normal! zo
15
normal! zo
let s:l = 2 - ((1 * winheight(0) + 8) / 17)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
2
normal! 0
wincmd w
argglobal
2argu
edit module/User/test/Model/UserCredentialsTest.php
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
33
normal! zo
let s:l = 30 - ((0 * winheight(0) + 8) / 16)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
30
normal! 04|
wincmd w
argglobal
3argu
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
let s:l = 15 - ((4 * winheight(0) + 11) / 22)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
15
normal! 03|
wincmd w
argglobal
3argu
edit module/User/src/Model/Entity/UserDetails.php
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
13
normal! zo
15
normal! zo
15
normal! zo
let s:l = 15 - ((11 * winheight(0) + 11) / 23)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
15
normal! 03|
wincmd w
argglobal
3argu
edit module/User/test/Model/UserDetailsTest.php
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
33
normal! zo
35
normal! zo
let s:l = 44 - ((13 * winheight(0) + 11) / 22)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
44
normal! 0
wincmd w
argglobal
edit module/User/src/Factory/Model/TableGateway/UserAclTableGatewayFactory.php
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
let s:l = 15 - ((4 * winheight(0) + 11) / 22)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
15
normal! 03|
wincmd w
argglobal
edit module/User/src/Model/Entity/UserAcl.php
setlocal fdm=expr
setlocal fde=GetPhpFold(v:lnum)
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
7
normal! zo
13
normal! zo
13
normal! zo
15
normal! zo
15
normal! zo
let s:l = 24 - ((15 * winheight(0) + 11) / 23)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
24
normal! 0
wincmd w
argglobal
edit module/User/test/Model/UserAclTest.php
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
33
normal! zo
let s:l = 10 - ((9 * winheight(0) + 11) / 22)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
10
normal! 0
wincmd w
argglobal
4argu
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
let s:l = 15 - ((4 * winheight(0) + 11) / 22)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
15
normal! 03|
wincmd w
argglobal
4argu
edit module/User/src/Model/Entity/UserRoles.php
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
13
normal! zo
15
normal! zo
15
normal! zo
let s:l = 15 - ((11 * winheight(0) + 11) / 23)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
15
normal! 03|
wincmd w
argglobal
4argu
edit module/User/test/Model/UserRolesTest.php
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
let s:l = 13 - ((0 * winheight(0) + 11) / 22)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
13
normal! 0
wincmd w
4wincmd w
exe '1resize ' . ((&lines * 17 + 36) / 72)
exe 'vert 1resize ' . ((&columns * 68 + 136) / 272)
exe '2resize ' . ((&lines * 16 + 36) / 72)
exe 'vert 2resize ' . ((&columns * 68 + 136) / 272)
exe '3resize ' . ((&lines * 17 + 36) / 72)
exe 'vert 3resize ' . ((&columns * 68 + 136) / 272)
exe '4resize ' . ((&lines * 16 + 36) / 72)
exe 'vert 4resize ' . ((&columns * 68 + 136) / 272)
exe '5resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 5resize ' . ((&columns * 67 + 136) / 272)
exe '6resize ' . ((&lines * 23 + 36) / 72)
exe 'vert 6resize ' . ((&columns * 67 + 136) / 272)
exe '7resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 7resize ' . ((&columns * 67 + 136) / 272)
exe '8resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 8resize ' . ((&columns * 67 + 136) / 272)
exe '9resize ' . ((&lines * 23 + 36) / 72)
exe 'vert 9resize ' . ((&columns * 67 + 136) / 272)
exe '10resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 10resize ' . ((&columns * 67 + 136) / 272)
exe '11resize ' . ((&lines * 22 + 36) / 72)
exe 'vert 11resize ' . ((&columns * 67 + 136) / 272)
exe '12resize ' . ((&lines * 23 + 36) / 72)
exe 'vert 12resize ' . ((&columns * 67 + 136) / 272)
exe '13resize ' . ((&lines * 22 + 36) / 72)
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
