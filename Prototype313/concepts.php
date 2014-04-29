<?php session_start() ?>
<!--
	Prototype 311
	CSS Document 
	
	SENIOR DESIGN I
	
	Chusen Liang
	Philip Moise
	Micheal Ye
	Jacky Guo
	
	Concepts
-->

<!DOCTYPE html>
<html>
<head>
	<title>Prototype 313</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="images/logo.png" rel="shortcut icon">
</head>
	
<body style="background-color:#0a2b43;" data-spy="scroll" data-target="#navbar" >
	<?php include 'header.php' ?>
	
    <div id="Inheritance" class="box">
        <h1>Inheritance</h1><br>
        <p>Inheritance can be defined as the process where one object acquires the properties of another. With the use of inheritance the information is made manageable in a hierarchical order.

When we talk about inheritance, the most commonly used keyword would be extends and implements. These words would determine whether one object IS-A type of another. By using these keywords we can make one object acquire the properties of another object.</p>
    </div>
    <div id="Overriding" class="box">
    	<h1>Overriding</h1><br>
		<p>In the previous chapter, we talked about super classes and sub classes. If a class inherits a method from its super class, then there is a chance to override the method provided that it is not marked final.

The benefit of overriding is: ability to define a behavior that's specific to the subclass type which means a subclass can implement a parent class method based on its requirement.

In object-oriented terms, overriding means to override the functionality of an existing method.</p>
    </div>
    <div id="Polymorphism" class="box">
    	<h1>Polymorphism</h1><br>
		<p>Polymorphism is the ability of an object to take on many forms. The most common use of polymorphism in OOP occurs when a parent class reference is used to refer to a child class object.

Any Java object that can pass more than one IS-A test is considered to be polymorphic. In Java, all Java objects are polymorphic since any object will pass the IS-A test for their own type and for the class Object.

It is important to know that the only possible way to access an object is through a reference variable. A reference variable can be of only one type. Once declared, the type of a reference variable cannot be changed.

The reference variable can be reassigned to other objects provided that it is not declared final. The type of the reference variable would determine the methods that it can invoke on the object.

A reference variable can refer to any object of its declared type or any subtype of its declared type. A reference variable can be declared as a class or interface type.</p>
    </div>
    <div id="Abstraction" class="box">
    	<h1>Abstraction</h1><br>
		<p>Abstraction refers to the ability to make a class abstract in OOP. An abstract class is one that cannot be instantiated. All other functionality of the class still exists, and its fields, methods, and constructors are all accessed in the same manner. You just cannot create an instance of the abstract class.

If a class is abstract and cannot be instantiated, the class does not have much use unless it is subclass. This is typically how abstract classes come about during the design phase. A parent class contains the common functionality of a collection of child classes, but the parent class itself is too abstract to be used on its own.</p>
    </div>
    <div id="Encapsulation" class="box">
    	<h1>Encapsulation</h1><br>
		<p>Encapsulation is one of the four fundamental OOP concepts. The other three are inheritance, polymorphism, and abstraction.

Encapsulation is the technique of making the fields in a class private and providing access to the fields via public methods. If a field is declared private, it cannot be accessed by anyone outside the class, thereby hiding the fields within the class. For this reason, encapsulation is also referred to as data hiding.

Encapsulation can be described as a protective barrier that prevents the code and data being randomly accessed by other code defined outside the class. Access to the data and code is tightly controlled by an interface.

The main benefit of encapsulation is the ability to modify our implemented code without breaking the code of others who use our code. With this feature Encapsulation gives maintainability, flexibility and extensibility to our code.</p>
    </div>
    <div id="Interfaces" class="box">
    	<h1>Interfaces</h1><br>
		<p>An interface is a collection of abstract methods. A class implements an interface, thereby inheriting the abstract methods of the interface.

An interface is not a class. Writing an interface is similar to writing a class, but they are two different concepts. A class describes the attributes and behaviors of an object. An interface contains behaviors that a class implements.

Unless the class that implements the interface is abstract, all the methods of the interface need to be defined in the class.

<br> <br> An interface is similar to a class in the following ways: <br>

An interface can contain any number of methods.<br>

<br> However, an interface is different from a class in several ways, including: <br>

You cannot instantiate an interface.<br>

An interface does not contain any constructors.<br>

All of the methods in an interface are abstract.<br>

An interface cannot contain instance fields. The only fields that can appear in an interface must be declared both static and final.<br>

An interface is not extended by a class; it is implemented by a class.<br>

An interface can extend multiple interfaces.</p>
    </div>
    <div id="Data_structures" class="box">
    	<h1>Data Structures</h1><br>
		<p>
		   <ul style="list-style:none;">
		   <li>Arrays</li>
		   <li>Linked Lists</li>
		   <li>Stacks</li>
		   <li>Queues</li>
		   <li>Trees
		   	   <ul>
				   <li>Binary Search Tree</li>
				   <li>Optimal Binary Search Tree</li>
				   <li>Selection Tree</li>
				   <li>2-3 Tree</li>
				   <li>2-3-4 Tree</li>
				   <li>Red-Black Tree</li>
				   <li>AVL Tree</li>
				   <li>B/B* Tree</li>
				   <li>Splay Tree</li>
				   <li>Tries Tree</li>
				   <li>Digital Search Tree</li>
		   	   </ul>
		   </li>
		   <li>Graphs</li>
		   <li>Heaps
			   <ul>
			   	   <li>Min-max Heaps</li>
			   	   <li>Deaps</li>
			   	   <li>Leftiest Tress</li>
			   	   <li>Binomial Heaps</li>
			   	   <li>Fibonacci Heaps</li>
			   </ul>
		   </li>
		   <li>Sets</li>
		   <li>Hash Tables</li>
		   </ul>
		   <br>
		</p>
    </div>

   
    
    <div id="navbar">
        <ul class="nav">
            <li><a href="#Inheritance">Inheritance</a></li>
            <li><a href="#Overriding">Overriding</a></li>
            <li><a href="#Polymorphism">Polymorphism</a></li>
            <li><a href="#Abstraction">Abstraction</a></li>
            <li><a href="#Encapsulation">Encapsulation</a></li>
            <li><a href="#Interfaces">Interfaces</a></li>
            <li><a href="#Data_structures">Data Structures</a></li>
        </ul>
    </div>
    
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-scrollspy.js"></script>
	
	<?php include 'footer.php' ?>
    
    
    <!--Javascript================================================== -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <!-- Bootstrap jQuery plugins compiled and minified -->
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.carousel').carousel({
          interval: 2000
        });
      });
    </script>
    
</body>
</html>
