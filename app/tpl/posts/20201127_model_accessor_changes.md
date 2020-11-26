# Model Accessor Changes

Many model members are now public in order to reduce useless getters/setters which provide no additional functionality. This significantly reduces the amount of implementation code and tests. 

The process to switch to more public member variables is not finished yet and will continue over the next couple of weeks. If we will remove the unit tests for these old getter/setter functions remains to be evaluated. If PHP ever implements read only member variables after the initial asignment we will probably expand the scope of the removal of getters/setters further. 
