<h4>Users' API</h4>
<script type="text/javascript">
    $(document).ready(function() {
        getUsers();
        // createUser({nome: 'Nininho', sobrenome: 'Pimenta', email: 'nini@nini.com', telefone: '(31) 3488-2275'});
        // createUser({nome: 'Duquesa', sobrenome: 'Pimenta', email: 'dudu@udu.com', telefone: '(31) 3488-2275'});
        // deleteUser('nini@nini.com');
    });

    function getUsers() {
        $.ajax({
            url: 'api/users',
            dataType: 'json'
        })
        .done(function() {
            alert("get users success");
        })
        .fail(function() {
            alert("get users error");
        });
    }

    function createUser(user) {
        $.ajax({
            url: 'api/users/create',
            method: 'post',
            dataType: 'json',
            data: user
        })
        .done(function() {
            alert("create user success");
        })
        .fail(function() {
            alert("create user error");
        });
    }

    function deleteUser(email) {
        $.ajax({
            url: 'api/users/delete/' + email,
            method: 'delete',
            dataType: 'json',
        })
        .done(function() {
            alert("delete user success");
        })
        .fail(function() {
            alert("delete user error");
        });
    }

    function updateUser(id, data) {
        $.ajax({
            url: 'api/users/update/' + id,
            method: 'put',
            dataType: 'json',
            data: data
        })
        .done(function() {
            alert("update user success");
        })
        .fail(function() {
            alert("update user error");
        });
    }
</script>

