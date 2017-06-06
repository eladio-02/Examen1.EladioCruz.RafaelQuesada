

create table cliente(
            id int primary key,
            name text not null,
            apellido text not null,
            birthday text not null,
            status text not null,
            sexo text not null,
    		active int not null,
            discount float not null,
            date1 text not null
 )

 create table users(
            id serial primary key,
            username text not null,
            password text not null,
            date1 text not null
 )
 

 create table product(
            id serial primary key,
            name text not null,
            brand text not null,
            family text not null,
            factory text not null,
            type text not null,
            departamento text not null,
            active int not null,
            unity text not null,
            tax float not null,
     		date1 text not null
 )
 
 create table stock(
            id serial primary key,
            product_id int not null references product(id),
            quantity int not null,
            min_quantity text not null,
            max_quantity text not null,
            gravado text not null,
            date1 text not null
 )
 
 create table stock_movement(
            id serial primary key,
            product_id int not null references product(id),
            new_quantity int not null,
            date1 text not null
 )
 
 create table stock_movement_detail(
            id serial primary key,
            product_id int not null references product(id),
            last_quantity int not null,
            date1 text not null
 )
 
 
 