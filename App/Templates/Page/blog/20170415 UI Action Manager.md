# UI Action Manager

Whenever you want to implement some slightly extended UI behavior and dynamic changes in a web application you either have to create components (HTML, CSS, JS) that can be loaded into the page or write page specific JS. While writing components is a nice way to provide complete packages (e.g. autocomplete, DOM modifications, etc.) they can be over-kill or tedious to implement. 

With the UI action manager it's possible to create and define __actions__ on a lower level. Actions can be used in components or directly in the application. Think of actions as single LEGO bricks and components as a LEGO set consiting of many different bricks. While you can use the bricks to build components it's also possible to directly use them for whatever you want. This allows for easier/faster component building and direct use in the application without creating a full component. 

The actions simply need to be defined in the dom for the element you want to define a new behavior. The following example creates a popup after clicking on a button from a template defined in the application, performs a HTTP request and pushes the HTTP result into a table.

```
<button type="button" data-action='[
    {
        "listener": "click", "action": [
            {"type": "dom.popup", "tpl": "acc-grp-tpl", "aniIn": "fadeIn"},
            {"type": "message.request", "uri": "<?= \phpOMS\Uri\UriFactory::build('{/base}/{/lang}/api/admin/account?filter=some&limit=10'); ?>", "method": "GET", "request_type": "json"},
            {"type": "dom.table.append", "id": "acc-grp-table", "aniIn": "fadeIn", "data": [], "bindings": {"id": "id", "name": "name/0"}, "position": -1}
        ]
    }
]'>
```

The next example creates a autocomplete based on web-server provided data. A timer checks if the user stopped typing for 500ms, clears the previous autocomplete, requests data according to the user input and adds the result set as possible autocomplete.

```
<input type="text" list="iReceiver-datalist" id="iReceiver" name="receiver" placeholder="&#xf007; Guest" data-action='[
    {
        "listener": "keyup", "action": [
            {"type": "utils.timer", "id": "iReceiver", "delay": 500, "resets": true},
            {"type": "dom.datalist.clear", "id": "iReceiver-datalist"},
            {"type": "message.request", "uri": "{/base}/{/lang}/api/admin/find/account?search={#iReceiver}", "method": "GET", "request_type": "json"},
            {"type": "dom.datalist.append", "id": "iReceiver-datalist", "value": "id", "text": "name"}
        ]
    }
]' required>
<datalist id="iReceiver-datalist"></datalist>
```

New actions can be easily defined and loaded which allows to customize and extend the possibilities. Not a single line of additional JS is required after defining the actions. The difference to components is that these actions are as already described on a lower level, are much more flexible and easier to implement since all that needs to be added is a `data-action` attribute with the listeners and actions. 

While this is not coverd in these examples it's also possible to add multiple listeners for different behavior depending on the listener.

> The URIs defined here in both examples are parsed by a `UriFactory` (the first one server side and the second one client side) which allows to dynamically create URLs (e.g. parse data/values of input fields into the request URL before performing the request).