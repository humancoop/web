<table>
    <tbody>
        <tr>
            <td><b>Número de socio:</b></td>
            <td></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td colspan="4" style="color:#ffffff;background-color:#2c7a7b;"><b>DATOS PERSONALES Y DATOS VISADO</b></td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Nombre y apellidos</td>
            <td>{{ $new_member->full_name }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Fecha de nacimiento</td>
			<td>{{ $new_member->birthdate }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Dirección</td>
			<td>{{ $new_member->address}}</td>
            <td style="color:#ffffff;background-color:#333333">Código postal</td>
			<td>{{ $new_member->postal_code }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Provincia</td>
			<td>{{ $new_member->province}}</td>
            <td style="color:#ffffff;background-color:#333333">E-mail</td>
			<td>{{ $new_member->email }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Localidad</td>
			<td>{{ $new_member->city }}</td>
            <td style="color:#ffffff;background-color:#333333" width="33">Teléfono móvil</td>
			<td width="66">{{ $new_member->phone_number }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333" width="33">Otro número de contacto</td>
			<td width="66">{{ $new_member->secondary_phone_number }}</td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">NIF</td>
			<td>{{ $new_member->nif }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Aportación (€)</td>
			<td>{{ $new_member->amount }}</td>
            <td style="color:#ffffff;background-color:#333333">Periodicidad</td>
			<td>{{ $new_member->period }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">¿Cómo nos conociste?</td>
			<td>{{ $new_member->where_did_you_know }}</td>
        </tr>
        <tr>
            <td colspan="4" style="color:#ffffff;background-color:#2c7a7b;"><b>DATOS DE SOCIO (APARTADO INTERNO A RELLENAR)</b></td>
        </tr>
        <tr>
			<td>Contrato firmado</td>
        </tr>
        <tr>
			<td>Ley de protección de datos firmada</td>
        </tr>
        <tr>
			<td>Justificante pago socio</td>
        </tr>
    </tbody>
</table>

