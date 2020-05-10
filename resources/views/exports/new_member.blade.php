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
            <td style="color:#ffffff;background-color:#333333">Lugar de nacimiento</td>
			<td>{{ $new_member->birthplace }}</td>
            <td style="color:#ffffff;background-color:#333333">Fecha de nacimiento</td>
			<td>{{ $new_member->birthdate }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Provincia</td>
			<td>{{ $new_member->province }}</td>
            <td style="color:#ffffff;background-color:#333333">Código postal</td>
			<td>{{ $new_member->postal_code }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Domicilio</td>
			<td>{{ $new_member->address }}</td>
            <td style="color:#ffffff;background-color:#333333">E-mail</td>
			<td>{{ $new_member->email }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Localidad</td>
			<td>{{ $new_member->city }}</td>
            <td style="color:#ffffff;background-color:#333333">Teléfono móvil</td>
			<td>{{ $new_member->phone_number }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333" width="33">Provincia</td>
			<td width="66">{{ $new_member->province}}</td>
            <td style="color:#ffffff;background-color:#333333" width="33">Otro número de contacto</td>
			<td width="66">{{ $new_member->secondary_phone_number }}</td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">NIF</td>
			<td>{{ $new_member->nif }}</td>
            <td style="color:#ffffff;background-color:#333333">Número de pasaporte</td>
			<td>{{ $new_member->passport_number }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Nombre del padre</td>
			<td>{{ $new_member->father_name }}</td>
            <td style="color:#ffffff;background-color:#333333">Nombre de la madre</td>
			<td>{{ $new_member->mother_name }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Fecha de expedición</td>
			<td>{{ $new_member->issue_date }}</td>
            <td style="color:#ffffff;background-color:#333333">Lugar de expedición</td>
			<td>{{ $new_member->issue_location }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Fecha de validez</td>
			<td>{{ $new_member->validity_date }}</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Ya soy socio de HumanCoop</td>
			<td>{{ $new_member->already_a_member ? 'Sí' : 'No' }}</td>
            <td style="color:#ffffff;background-color:#333333">Número de cuenta de voluntario</td>
			<td>{{ $new_member->account_number }}</td>
        </tr>
        <tr>
            <td colspan="4" style="color:#ffffff;background-color:#2c7a7b;"><b>PERFIL PROFESIONAL Y EXPERIENCIA EN VOLUNTARIADO</b></td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Soy sanitario</td>
			<td>{{ $new_member->is_sanitary ? 'Sí' : 'No' }}</td>
            <td style="color:#ffffff;background-color:#333333">Formación</td>
			<td>{{ $new_member->training }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Experiencia profesional</td>
			<td>{{ $new_member->professional_experience }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Años de experiencia</td>
			<td>{{ $new_member->years_of_experience }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Especialidad</td>
			<td>{{ $new_member->speciality }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Motivaciones</td>
			<td>{{ $new_member->motivations }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Tengo experiencia en voluntariado</td>
			<td>{{ $new_member->has_volunteering_experience ? 'Sí' : 'No' }}</td>
            <td style="color:#ffffff;background-color:#333333">¿Dónde?¿Qué actividad desarrollaste?</td>
			<td>{{ $new_member->volunteering_experience_info }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Es mi primera vez en HumanCoop</td>
			<td>{{ $new_member->first_time_in_humancoop ? 'Sí' : 'No' }}</td>
            <td style="color:#ffffff;background-color:#333333">¿Cómo nos conociste?</td>
			<td>{{ $new_member->where_did_you_know }}</td>
        </tr>
        <tr>
            <td colspan="4" style="color:#ffffff;background-color:#2c7a7b;"><b>DATOS DE LA COMISIÓN (APARTADO INTERNO A RELLENAR)</b></td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Comisión</td>
			<td></td>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Fecha</td>
			<td></td>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Destino</td>
			<td></td>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Documentación necesaria</td>
        </tr>
        <tr>
			<td>Contrato firmado</td>
        </tr>
        <tr>
			<td>Ley de protección dedatos firmada</td>
        </tr>
        <tr>
			<td>Pasaporte</td>
        </tr>
        <tr>
			<td>Justificante pago socio</td>
        </tr>
    </tbody>
</table>

