// function to parse fragment parameters
var parseQueryString = function( queryString ) {
    var params = {}, queries, temp, i, l;

    // Split into key/value pairs
    queries = queryString.split("&");
    // Convert the array of strings into an object
    for ( i = 0, l = queries.length; i < l; i++ ) {
        temp = queries[i].split('=');
        params[temp[0]] = temp[1];
    }
    return params;
};
// get token params from URL fragment
var tokenParams = parseQueryString(window.location.hash.substr(1));
