<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Lista de Usuarios</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 30px;
        }
        h1, h2 {
            color: #343a40;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .form-check-label {
            margin-left: 5px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Lista de Usuarios</h1>
    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuario</th>
                <th scope="col">Contraseña</th>
            </tr>
        </thead>
        <tbody id="usuariosTabla">
            <tr>
                <th scope="row">4</th>
                <td>atontoles</td>
                <td>atontomuytonto123</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>joakinpig</td>
                <td>joakoelchancho</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>roberto</td>
                <td>robertoelquetedejaelculoabierto</td>
            </tr>
        </tbody>
    </table>

    <h2 class="text-center mb-4">Formulario de Usuario</h2>
    <form id="usuarioForm" class="mb-4">
        <div class="form-group mb-3">
            <label for="inputUsuario">Usuario</label>
            <input type="text" class="form-control" id="inputUsuario" placeholder="Ingrese usuario" required />
        </div>
        <div class="form-group mb-3">
            <label for="inputPassword">Contraseña</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Ingrese contraseña" required />
        </div>
        <div class="form-group form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkConfirm" required>
            <label class="form-check-label" for="checkConfirm">Confirmo que los datos son correctos</label>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Usuario</button>
    </form>
</div>

<!-- JS de Bootstrap (Popper y Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('usuarioForm');
        const tabla = document.getElementById('usuariosTabla');
        let idCounter = tabla.rows.length; // inicia con la cantidad actual de filas
        
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const usuario = document.getElementById('inputUsuario').value.trim();
            const password = document.getElementById('inputPassword').value.trim();
            const check = document.getElementById('checkConfirm').checked;
            
            if (!usuario || !password) {
                alert('Por favor, completa todos los campos.');
                return;
            }
            if (!check) {
                alert('Por favor, confirma que los datos son correctos.');
                return;
            }
            
            idCounter++;
            
            const nuevaFila = tabla.insertRow();
            const celdaId = nuevaFila.insertCell(0);
            const celdaUsuario = nuevaFila.insertCell(1);
            const celdaPassword = nuevaFila.insertCell(2);
            
            celdaId.innerHTML = idCounter;
            celdaUsuario.textContent = usuario;
            celdaPassword.textContent = password;
            
            // Opcional: añadir scope="row" a celdaId para consistencia visual
            celdaId.setAttribute('scope', 'row');
            
            // Limpiar formulario
            form.reset();
        });
    });
</script>
</body>
</html>

