function confirmDeletion(input) {
    return confirm('Voulez-vous vraiment supprimer ceci ?');
}

function testComment () {
    var content = document.querySelector("[name='content']");
    var name = document.querySelector("[name='name']")
    if(!(content.value.length > 10 && content.value.length < 1000))
        return false;
    if(!(name.value.length > 5 && name.value.length < 20))
        return false;
    return true;
}