# Simple Blog-system

##### This package makes a simple blog. The blog post displays :
* The Post Number.
* The Post Date.
* The Post Title.
* An Image for the Post.
* The description of the Post.

##### The blog-system includes :
* A home page
* A login page
* An admin homepage
* An add post page
* An edit post page

##### This blog package allows you to :

* Display the blogs
* Add a blog
* Delete a blog
* Edit a blog

### To use this blog-system in SQL:
You will need a database with two tables in phpMyAdmin. One of the tables will store the blog named it "blog", and the second table will be for the user named it "login".

The blog table has 5 columns:
1. "number"
2. "date"
3. "title"
4. "image"
5. "description"

The user table has 2 columns:
1. "username"
2. "password"

###### You need to type the username and password to your database at "includes/establish.php"
