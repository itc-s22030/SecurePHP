#!/usr/bin/perl
use strict;
use CGI;
use utf8;
use Encode;

my $q = new CGI;
my $mail = $q->param('mail');

open my $pipe, '|-', '/usr/sbin/sendmail', $mail or die $!;

print $pipe encode('UTF-8', <<EndOfMail);
To: $mail
From: webmaster\@example.jp
Subject: =?UTF-8?B?5Y+X44GR5LuY44GR44G+44GX44Gf?=
Content-Type: text/plain; charset="UTF-8"
Content-Transfer-Encoding: 8bit

お問い合わせを受け付けました
EndOfMail

close $pipe;

print encode('UTF-8', <<EndOfHTML);
Content-Type: text/html; charset=UTF-8

<body>
お問い合わせを受け付けました
</body>
EndOfHTML
