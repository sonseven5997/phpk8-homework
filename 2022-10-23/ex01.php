<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .collapsible {
            background-color: #777;
            color: white;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            margin-bottom: 10px;
        }

        .active, .collapsible:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
<?php
$dropdownsJson = file_get_contents("./dropdown.json");

$dropdowns = json_decode($dropdownsJson);


if (!is_array($dropdowns)) return;

foreach ($dropdowns as $dropdown) {
    $dropdown->isParent = true;
}

$index = 0;
function renderDropdown(array $arr): void
{
    global $index;
    foreach ($arr as $value) {
        if (isset($value->isParent) && $value->isParent) {
            $index = 0;
        };
        $ml = $index * 10;
        $childClass = 'child-' . $index;
        if (isset($value->isParent) && $value->isParent) {
            echo '<div class="collapsible ' . $value->slug . '" ' . 'style="margin-left: ' . $ml . 'px"' . '>' . $value->title . '</div>';
        } else {
            echo '<div class="collapsible ' . $childClass . '" ' . 'style=" margin-left: ' . $ml . 'px"' . '>' . $value->title . '</div>';
        }
        if (!empty($value->children)) {
            $index++;
            renderDropdown($value->children);

        }

    }

}

renderDropdown($dropdowns);
?>
<script>
    const collapsibleElements = [...document.getElementsByClassName("collapsible")];
    const children = collapsibleElements.filter(coll => coll.className.includes('child'));
    const parent = collapsibleElements.filter(coll => !coll.className.includes('child'));
    children.forEach(childEl => {
        childEl.style.display = "none";
    })
    parent.forEach(el => {
        const [, slug] = el.className.split(" ");
        el.addEventListener("click", function () {
            this.classList.toggle("active");
            children.forEach(childEl => {
                if (childEl.style.display === "block") {
                    childEl.style.display = "none";
                } else if (childEl.style.display === "block" && childEl.className.includes('child-1')) {
                    childEl.style.display = "none";
                } else if (childEl.style.display === "none" && childEl.className.includes('child-1')) {
                    childEl.style.display = "block";
                }
            })
        })
    })
    children.forEach(childEl => {
        childEl.addEventListener("click", function () {
            const [, classNameWithSlug] = this.className.split(" ");
            const [_child, index] = classNameWithSlug.split('-')
            children.forEach(child => {
                if (child.className.includes(_child + "-" + (Number(index) + 1))) {
                    if (child.style.display === "block") {
                        child.style.display = "none"
                    } else {
                        child.style.display = "block"
                    }
                }
            })
        })
    })
</script>
</body>
</html>


