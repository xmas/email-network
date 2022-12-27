<x-mail::message>
# Introduction

<x-mail::subcopy>
Hello {{ $user->name }},

So I’ve decided that I don’t like any of the existing social network options for blogging, 

What I really liked was the early days of twitter and Facebook before the crazy took over. You could easily connect with people in a way that didn’t demand attention. I was able to post something, and maybe people would see it and care, maybe not! The point was to post.

This is my attempt to bring that back. Gathr Space is designed to not want much of your attention. You can put things out there, and people will see them.

It runs mostly on email, so there is no website or another thing you need. And since you’re not on a web browser maybe it’ll be less enticing to endlessly surf the web.

</x-mail::subcopy>

<p class="thread-next">⬇️</p>


<x-mail::subcopy>
This is a response. I don't know about this, but I think it's silly. 
<a href="mailto:rowanxmas@gmail.com" target="_blank" rel="noopener noreferrer">reply to this</a>. or not or whatever.
</x-mail::subcopy>




The body of your message.

<x-mail::button :url="''">
REPLY
</x-mail::button>

GATHR ON,<br>
{{ config('app.name') }}
</x-mail::message>
