

function pt2mm(pt, mm) {

    if (pt == 0) {
        return (2.835 * mm.val()).toFixed(2);
    }
    else {
        return (pt.val() / 2.835).toFixed(2);
    }


}


function cm2mm(valor) {
    if (typeof valor == "number") {
        return valor * 10;
    }

}
function mm2cm(valor) {
    if (typeof valor == "number") {
        return valor / 10;
    }

}
function cmarea2mm(valor) {
    if (typeof valor == "number") {
        return valor * 100;
    }

}
function mmarea2cm(valor) {
    if (typeof valor == "number") {
        return valor / 100;
    }

}


function verifica(array, valor) {
    for (x = 0; x <= array.length - 1; x++) {

        console.log(valor, array[x][0]);

        if (x < array.length - 1) {
            if (valor <= array[x][0] && x == 0) {
                return array[x][1];
            } else if (x > 0 && array[x - 1][0] < valor && valor <= array[x][0]) {
                return array[x][1];
            }
        } else {
            return array[x][1];
        }
    }
}

function copyToClipboard(text) {
    var dummy = document.createElement('textarea');
    text = text.replace('.', ',');
    // = avoid breaking orgain page when copying more words
    // cant copy when adding below this code
    // dummy.style.display = 'none'
    document.body.appendChild(dummy);
    //Be careful if you use texarea. letAttribute('value', value), which works with "input" does not work with "textarea". – Eduard
    dummy.value = text;
    dummy.select();
    document.execCommand('copy');
    document.body.removeChild(dummy);
}
function sort(elementid) {
    // WARN: won't handle OPTGROUPs!
    var sel = document.getElementById(elementid)
    // convert OPTIONs NodeList to an Array
    // - keep in mind that we're using the original OPTION objects
    var ary = (function (nl) {
        var a = []
        for (var i = 0, len = nl.length; i < len; i++) a.push(nl.item(i))
        return a
    })(sel.options)
    // sort OPTIONs Array
    ary.sort(function (a, b) {
        // sort by "value"? (numeric comparison)
        // NOTE: please remember what ".value" means for OPTION objects
        //return a.value - b.value
        // or by "label"? (lexicographic comparison) - case sensitive
        //return a.text < b.text ? -1 : a.text > b.text ? 1 : 0;
        // or by "label"? (lexicographic comparison) - case insensitive
        var aText = a.text.toLowerCase()
        var bText = b.text.toLowerCase()
        return aText < bText ? -1 : aText > bText ? 1 : 0
    })
    // remove all OPTIONs from SELECT (don't worry, the original
    // OPTION objects are still referenced in "ary") ;-)
    for (var i = 0, len = ary.length; i < len; i++) sel.remove(ary[i].index)
    // (re)add re-ordered OPTIONs to SELECT
    for (var i = 0, len = ary.length; i < len; i++) sel.add(ary[i], null)
}

function sortList(elementid) {
    var list, i, switching, b, shouldSwitch;
    list = document.getElementById(elementid);
    switching = true;
    /* Make a loop that will continue until
    no switching has been done: */
    while (switching) {
        // Start by saying: no switching is done:
        switching = false;
        b = list.getElementsByTagName("LI");
        // Loop through all list items:
        for (i = 0; i < (b.length - 1); i++) {
            // Start by saying there should be no switching:
            shouldSwitch = false;
            /* Check if the next item should
            switch place with the current item: */
            if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
                /* If next item is alphabetically lower than current item,
                mark as a switch and break the loop: */
                shouldSwitch = true;
                break;
            }
        }
        if (shouldSwitch) {
            /* If a switch has been marked, make the switch
            and mark the switch as done: */
            b[i].parentNode.insertBefore(b[i + 1], b[i]);
            switching = true;
        }
    }
}