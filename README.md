# Task - Yii2 Custom module creation.

## Editor
### Sublime Text 3
####plugin
#####1	Glue ( Sublime Terminal panel )

## Server side and client side tools
###1	composer [Componser Official site](Composer is a tool for dependency management in PHP)
###2	git   (Online distributed version control system)[Git Offical Site](https://git-scm.com/)
###3	node  (Server side JavaScript )[Node.js Official Site](https://nodejs.org/en/)
###4	npm   (Server side package manager)[NPM Official Site](https://www.npmjs.com/)
###5	bower (Client side package manager)[Bower Official site](https://bower.io/)
###6	github Account [Official Site](https://github.com/)



##How to create

1	Create Databse
2	Create table employees

###use gii tool and crete
1	module 
	app\modules\<module_name>\<ModuleName>
2	models
	app\modules\<module_name>\models\<ModelName>
3	Controllers
	app\modules\<module_name>\controllers\<Controller_nameController>

4	Crud operation for view files
	there are two ways to create view files 1) With path and 2) alias of views directory
	Note:: If you not define any path for the views directory then it will take default path. which is views folder from app.
	
	so copy that folder from views directory to your app\modules\<module_name>\views\


