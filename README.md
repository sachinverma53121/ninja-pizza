# ninja-pizza
**This is a DBMS project**
```
> We can create pizzas
> Store them in databse
> View Them
> Delete Them
```

create a database named `ninja-pizza` and then add the following table in it...
```
CREATE TABLE `test`.`pizzas` (
     `id` INT NOT NULL AUTO_INCREMENT ,  
     `title` VARCHAR(255) NOT NULL ,  
     `ingredients` VARCHAR(255) NOT NULL ,  
     `email` VARCHAR(255) NOT NULL ,  
     `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,    
     PRIMARY KEY  (`id`)
);

```
