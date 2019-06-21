# Repository

Sample implementation of repository in Laravel for large scale application

### Purpose

The main purpose of Repositories is to segregate and create a layer between 
the controllers and database query layer(Eloquent) to keep the codebase clean 
and well organized which is most required in a large applications.

We can implement interface to put a layer in between the controllers and the transformer model
that will give us flexibility

So while using repositories, we will find a scenario of constantly reimplementing common methods which is cumbersome. Well, we can solve this with simple inheritance.
By segregating the method to an abstractRepository we can reuse the code and decorate the model transformers as required

We can implement decorators to transform the data and re-utilize the transformer the way we intend to  

### Advantage

1. Keep the code base well-managed and organized.
2. Allows re-usability of the methods and queries keeping dry principle in play.
3. Creating a layer between the controller and Database query by utilizing interface 
   makes it easy to change to any type of DB in future if we need and think is efficient.
   Thus providing flexibility.
4. Implementing Abstract repository class will allow to reuse the repo for different models
   along with that data obtained can be modified the way required by using decorators    
   
   
