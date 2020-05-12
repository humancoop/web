<table>
    <tbody>
        <tr>
            <td colspan="4" style="color:#ffffff;background-color:#2c7a7b;"><b>DATOS</b></td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Nombre y apellidos</td>
            <td>{{ $new_donation->full_name }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Fecha de nacimiento</td>
			<td>{{ $new_donation->birthdate }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Dirección</td>
			<td>{{ $new_donation->address}}</td>
            <td style="color:#ffffff;background-color:#333333">Código postal</td>
			<td>{{ $new_donation->postal_code }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Provincia</td>
			<td>{{ $new_donation->province}}</td>
            <td style="color:#ffffff;background-color:#333333">E-mail</td>
			<td>{{ $new_donation->email }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Localidad</td>
			<td>{{ $new_donation->city }}</td>
            <td style="color:#ffffff;background-color:#333333" width="33">Teléfono móvil</td>
			<td width="66">{{ $new_donation->phone_number }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333" width="33">Otro número de contacto</td>
			<td width="66">{{ $new_donation->secondary_phone_number }}</td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">NIF</td>
			<td>{{ $new_donation->nif }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Aportación (€)</td>
			<td>{{ $new_donation->amount }}</td>
        </tr>
        <tr>
            <td colspan="4" style="color:#ffffff;background-color:#2c7a7b;"><b>APARTADO INTERNO A RELLENAR</b></td>
        </tr>
        <tr>
			<td>Ley de protección de datos firmada</td>
        </tr>
        <tr>
			<td>Justificante pago</td>
        </tr>
    </tbody>
</table>

