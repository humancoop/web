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
            <td style="color:#ffffff;background-color:#333333">Nombre</td>
            <td>{{ $new_volunteer->first_name }}</td>
            <td style="color:#ffffff;background-color:#333333">Apellidos</td>
            <td>{{ $new_volunteer->last_name }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Lugar de nacimiento</td>
			<td>{{ $new_volunteer->birthplace }}</td>
            <td style="color:#ffffff;background-color:#333333">Fecha de nacimiento</td>
			<td>{{ $new_volunteer->birthdate }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Código postal</td>
			<td>{{ $new_volunteer->postal_code }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Domicilio</td>
			<td>{{ $new_volunteer->address }}</td>
            <td style="color:#ffffff;background-color:#333333">E-mail</td>
			<td>{{ $new_volunteer->email }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Localidad</td>
			<td>{{ $new_volunteer->city }}</td>
            <td style="color:#ffffff;background-color:#333333">Teléfono móvil</td>
			<td>{{ $new_volunteer->phone_number }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333" width="33">Provincia</td>
			<td width="66">{{ $new_volunteer->province}}</td>
            <td style="color:#ffffff;background-color:#333333" width="33">Móvil de contacto familiar</td>
			<td width="66">{{ $new_volunteer->secondary_phone_number }}</td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">NIF</td>
			<td>{{ $new_volunteer->nif }}</td>
            <td style="color:#ffffff;background-color:#333333">Número de pasaporte</td>
			<td>{{ $new_volunteer->passport_number }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Nombre del padre</td>
			<td>{{ $new_volunteer->father_name }}</td>
            <td style="color:#ffffff;background-color:#333333">Nombre de la madre</td>
			<td>{{ $new_volunteer->mother_name }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Fecha de expedición</td>
			<td>{{ $new_volunteer->issue_date }}</td>
            <td style="color:#ffffff;background-color:#333333">Lugar de expedición</td>
			<td>{{ $new_volunteer->issue_location }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Fecha de validez</td>
			<td>{{ $new_volunteer->validity_date }}</td>
            <td style="color:#ffffff;background-color:#333333">Estado civil</td>
			<td>{{ $new_volunteer->marital_status }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Número de hijos</td>
			<td>{{ $new_volunteer->children_number }}</td>
            <td></td>
			<td></td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Ya soy socio de HumanCoop</td>
			<td>{{ $new_volunteer->already_a_volunteer ? 'Sí' : 'No' }}</td>
            <td style="color:#ffffff;background-color:#333333">Número de cuenta de voluntario</td>
			<td>{{ $new_volunteer->account_number }}</td>
        </tr>
        <tr>
            <td colspan="4" style="color:#ffffff;background-color:#2c7a7b;"><b>HISTORIAL MÉDICO</b></td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Alergias</td>
			<td>{{ $new_volunteer->allergies }}</td>
            <td style="color:#ffffff;background-color:#333333">Intolerancias</td>
			<td>{{ $new_volunteer->intolerances }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Enfermedades previas</td>
			<td>{{ $new_volunteer->previous_illnesses }}</td>
            <td style="color:#ffffff;background-color:#333333">Medicación habitual</td>
			<td>{{ $new_volunteer->medication }}</td>
        </tr>
        <tr>
            <td colspan="4" style="color:#ffffff;background-color:#2c7a7b;"><b>PERFIL PROFESIONAL Y EXPERIENCIA EN VOLUNTARIADO</b></td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Soy sanitario</td>
			<td>{{ $new_volunteer->is_sanitary ? 'Sí' : 'No' }}</td>
            <td style="color:#ffffff;background-color:#333333">Formación</td>
			<td>{{ $new_volunteer->training }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Experiencia profesional</td>
			<td>{{ $new_volunteer->professional_experience }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Años de experiencia</td>
			<td>{{ $new_volunteer->years_of_experience }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Especialidad</td>
			<td>{{ $new_volunteer->speciality }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Motivaciones</td>
			<td>{{ $new_volunteer->motivations }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Tengo experiencia en voluntariado</td>
			<td>{{ $new_volunteer->has_volunteering_experience ? 'Sí' : 'No' }}</td>
            <td style="color:#ffffff;background-color:#333333">¿Dónde?¿Qué actividad desarrollaste?</td>
			<td>{{ $new_volunteer->volunteering_experience_info }}</td>
        </tr>
        <tr>
            <td style="color:#ffffff;background-color:#333333">Es mi primera vez en HumanCoop</td>
			<td>{{ $new_volunteer->first_time_in_humancoop ? 'Sí' : 'No' }}</td>
            <td style="color:#ffffff;background-color:#333333">¿Cómo nos conociste?</td>
			<td>{{ $new_volunteer->where_did_you_know }}</td>
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
			<td>Ley de protección de datos firmada</td>
        </tr>
        <tr>
			<td>Pasaporte</td>
        </tr>
        <tr>
			<td>Justificante pago socio</td>
        </tr>
    </tbody>
</table>

