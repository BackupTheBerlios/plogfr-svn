function externalLinks()
{
    if (!document.getElementsByTagName) return;

    var anchors = document.getElementsByTagName("a");

    for (var i = 0; i < anchors.length; i++)
    {
        var anchor = anchors[i];

        if (anchor.getAttribute("href") && anchor.getAttribute("rel") == "external")
        {
            anchor.target = "_blank";
        }
    }
}

window.onload = externalLinks;

function verifyOneCheckMinimum(formName, msg, prefix)
{
    n = "all";

    if (prefix)
    {
        n = prefix + n;
    }

    f = document.getElementById(formName);
    i = 0;
    j = 0;

    while (e = f.elements[i])
    {
        if (e.type == "checkbox" && e.id != n && e.checked)
        {
            if (!prefix || e.id.indexOf(prefix) != -1)
            {
                j++;
            }
        }

        i++;
    }

    result = (j > 0);

    if (!result && msg)
    {
        alert(msg);
    }

    return result;
}

function submitForm(formName, opValue, msg)
{
    if (msg)
    {
        if (!verifyOneCheckMinimum(formName))
        {
            alert(msg);
            return false;
        }
    }

    f = document.getElementById(formName);
    f.op.value = opValue;
    return true;
}

function toggleAllChecks(formName, prefix)
{
    n = "all";

    if (prefix)
    {
        n = prefix + n;
    }

    i = 0;
    e = document.getElementById(n);
    s = e.checked;
    f = document.getElementById(formName);

    while (e = f.elements[i])
    {
        if (e.type == "checkbox" && e.id != n)
        {
            if (!prefix || e.id.indexOf(prefix) != -1)
            {
                e.checked = s;
            }
        }

        i++;
    }
}

function confirmDlg(l, msg)
{
    if (confirm(msg))
    {
        if (typeof(l) == 'string')
        {
            document.location.href = l;
        }
        else
        {
            document.location.href = l.href;
        }
    }

    return false;
}

function popUp(l, n, f)
{
    if (!window.focus)
    {
        return true;
    }

    if (typeof(l) == 'string')
    {
        window.open(l, n, f);
    }
    else
    {
        window.open(l.href, n, f);
    }

    return false;
}

function goTo(l)
{
    window.location.href = l;
}

function goToIf(l, msg)
{
    if (confirm(msg))
    {
        window.location.href = l;
    }
}