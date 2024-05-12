# Superglobals Variables--------

# Get and Post Method
 GET Method:

The GET method sends data in the URL's query string.
It appends data to the URL after a question mark (?).
GET requests are typically used for data retrieval, where you're fetching data from the server without making any changes on the server.
GET requests can be bookmarked and cached, making them ideal for retrieving static data.
They have a limitation on the amount of data that can be sent, typically around 2048 characters.

 POST Method:

The POST method sends data in the body of the HTTP request.
It's more secure compared to GET because the data is not visible in the URL.
POST requests are used when you're submitting data to the server to be processed or stored, such as submitting a form.
They can send larger amounts of data compared to GET requests.
POST requests are not bookmarked or cached by default, making them less suitable for fetching static data.

