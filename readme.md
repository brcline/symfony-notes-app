Our main web application is developed in PHP 7.1 with the standard Symfony 3.x and Doctrine
stack. In order for us to get a better feel for your programming abilities we ask that you please
complete this small challenge with these tools.
Challenge
Please create a small web application using PHP 7.1+, Symfony 3.x+, and Doctrine (please
configure for sqlite). Your application can be about anything but it should have:
● At least 2 controllers with routing between them; and
● At least 1 doctrine entity that is read from and can be persisted to the database from
your application.
Get creative, this is a chance to show off for us. The challenge above will show us all the basics
we want to see, however feel free to modify the challenge and add in your own bit of flair. If you
need some inspiration, the classic todos/notes application is a good base.

Bonus Challenges
These are separate extensions to the challenge that you don't have to complete, however if you
want additional opportunities to show us your skills then these will be great ways to do it!
1. Submit your application via a public Github/Bitbucket/etc repository link instead of a
zip/tar/etc. Your repository shouldn’t just be a single commit either, we will be looking for
meaningful commit messages.
2. Change your application to have a login system and an additional entity that represents
a user.
a. For additional points here, add a doctrine relationship to at least one of your other
entities (e.g. for the todo base example, todo’s are attached to logged in users so
when you login you see only your todos).
3. Create an action for returning paginated results for one of your entities.
a. For additional points and a chance to show off your JavaScript skills, use this
action to render the results in a table that fetches results via Ajax (this can be
done with jQuery datatables or your own choice of tool if you like).
4. Develop an action for your application that requires an EntityRepository to fulfill a query
too complex for the default methods auto generated by Doctrine (the pagination bonus
challenge synergizes very well with this one).
5. Make your application translatable using one of the Symfony translation bundles. Your
application should have at least 2 languages and the ability to swap between them. You
don’t have to provide valid language (i.e. translation keys) for your other target language,
we will be checking simply how you configure and use this in your views.