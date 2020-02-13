# Renaming Request, Response & Uri classes

The naming convention for the request, response and uri implementations where quite bad and resulted in some confusion. As a result these got changed to more easily recognizable names. These changes were implemented for the http, socket and console models.

* Request -> HttpRequest, SocketRequest, ConsoleRequest
* Response -> HttpResponse, SocketResponse, ConsoleResponse
* Http -> HttpUri

Immediately it became much easier to see what kind of models where used without considering the application environment.