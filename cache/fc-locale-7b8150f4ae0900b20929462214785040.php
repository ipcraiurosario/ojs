<?php return array (
  'admin.hostedJournals' => 'Revistas alojadas',
  'admin.settings.journalRedirect' => 'Redirigir revista',
  'admin.settings.options' => 'Opciones',
  'admin.settings.journalRedirectInstructions' => 'Las solicitudes para acceder al sitio principal se redirigirán a esta revista. Esto puede resultarle útil si el sitio sólo aloja una revista, por ejemplo.',
  'admin.settings.noJournalRedirect' => 'No redirigir',
  'admin.settings.defaultMetricDescription' => 'Su instalación de OJS está configurada para registrar más de una métrica de uso. Las estadísticas de uso se mostrarán en varios contextos. En algunos casos se debe utilizar una sola estadística de uso, p. ej. para mostrar una lista ordenada de los artículos más consultados o para clasificar los resultados de búsqueda. Seleccione una de las métricas configuradas como predeterminada.',
  'admin.languages.primaryLocaleInstructions' => 'Éste será el idioma predeterminado para el sitio y para todas las revistas que aloje.',
  'admin.languages.supportedLocalesInstructions' => 'Seleccione todas las configuraciones regionales que serán compatibles con el sitio. Las configuraciones regionales seleccionadas estarán disponibles para todas las revistas alojadas en el sitio y también aparecerán en el menú de selección de idioma en cada página del sitio (puede ser anulado en páginas específicas de las revistas). Si no ha seleccionado más de una configuración regional, el menú de selección no aparecerá y la configuración extendida de idioma no estará disponible para las revistas.',
  'admin.locale.maybeIncomplete' => 'Las configuraciones regionales marcadas pueden estar incompletas.',
  'admin.languages.confirmUninstall' => '¿Está seguro/a de que desea desinstalar esta configuración regional? Esto puede afectar a cualquier revista alojada que esté utilizando actualmente dicha configuración regional.',
  'admin.languages.installNewLocalesInstructions' => 'Seleccione cualquier configuración regional adicional para instalar su soporte en este sistema. Debe instalar las configuraciones regionales antes de que otras revistas alojadas puedan utilizarlas. Vea la documentación de OJS para obtener más información o para añadir soporte para nuevos idiomas.',
  'admin.languages.downloadFailed' => 'Fallo en la descarga de configuraciones regionales. El siguiente mensaje/s de error describe el fallo.',
  'admin.languages.localeInstalled' => 'La configuración regional "{$locale}" se instaló.',
  'admin.languages.download' => 'Descargar configuración regional',
  'admin.languages.download.cannotOpen' => 'No se puede abrir el descriptor de idiomas del sitio web PKP.',
  'admin.languages.download.cannotModifyRegistry' => 'No se puede añadir la nueva configuración regional al archivo de registro de configuraciones locales, normalmente "registry/locales.xml".',
  'admin.auth.ojs' => 'Base de datos de usuarios/as de OJS',
  'admin.auth.enableSyncProfiles' => 'Habilitar la sincronización del perfil de usuario/a (si el módulo de autenticación es compatible). La información del perfil del usuario/a se actualizará automáticamente desde una fuente remota cuando el usuario/a inicie sesión. Los cambios que se hagan en el perfil dentro de OJS (incluido el cambio de contraseña) se actualizarán automáticamente en la fuente remota. Si esta opción no está habilitada, la información del perfil de OJS se mantendrá separada de la información del perfil de la fuente remota.',
  'admin.auth.enableSyncPasswords' => 'Habilitar la modificación de contraseña de usuario/a (si el módulo de autenticación es compatible). Habilitar esta opción permite a los usuarios/as modificar su contraseña desde OJS y usar la función de OJS "contraseña perdida" para restablecer la contraseña en caso de olvido. Los usuarios/as con esta fuente de autenticación no podrán disponer de dichas funciones si la opción no está habilitada.',
  'admin.auth.enableCreateUsers' => 'Habilitar la creación de usuarios/as (si es compatible con el módulo de autenticación). Los usuarios/as creados en OJS con esta fuente de autenticación se añadirán automáticamente a la fuente de autenticación remota si no existían previamente. De forma adicional, si ésta es la fuente de autenticación por defecto, las cuentas OJS creadas mediante un registro de usuario/a también se añadirán a la fuente de autenticación remota.',
  'admin.systemVersion' => 'Versión de OJS',
  'admin.systemConfiguration' => 'Configuración de OJS',
  'admin.systemConfigurationDescription' => 'Configuración de OJS de <tt>config.inc.php</tt>.',
  'admin.journals.journalSettings' => 'Configuración de la revista',
  'admin.journals.noneCreated' => 'No se han creado revistas.',
  'admin.contexts.confirmDelete' => '¿Está seguro/a de que desea eliminar esta revista y todos sus contenidos de forma permanente?',
  'admin.contexts.create' => 'Crear revista',
  'admin.journals.createInstructions' => 'Se le asignará de forma automática el rol de gestor/a de la revista. Tras crear una nueva revista, acceda a ella como gestor/a para continuar con la configuración y el registro de usuarios/as.',
  'admin.journals.urlWillBe' => 'Este elemento debe ser una palabra corta o acrónimo para identificar la revista. La dirección URL de la revista será {$sampleUrl}',
  'admin.contexts.form.pathRequired' => 'Inserte una ruta.',
  'admin.contexts.form.pathAlphaNumeric' => 'La ruta sólo puede contener caracteres alfanuméricos, guiones y guiones bajos, y debe empezar y terminar con un carácter alfanumérico.',
  'admin.contexts.form.pathExists' => 'La ruta seleccionada ya está siendo utilizada por otra revista.',
  'admin.journals.enableJournalInstructions' => 'Habilitar esta revista para que aparezca de forma pública en el sitio',
  'admin.journals.journalDescription' => 'Descripción de la revista',
  'admin.journal.pathImportInstructions' => 'Ruta actual de la revista o ruta que se desea crear (p. ej. "ojs").',
  'admin.journals.importSubscriptions' => 'Importar suscripciones',
  'admin.journals.transcode' => 'Transcodificar metadatos de artículos de ISO8859-1',
  'admin.journals.redirect' => 'Generar código para asignar direcciones URL OJS 1 a URL OJS 2',
  'admin.journals.form.importPathRequired' => 'Se requiere la ruta de importación.',
  'admin.journals.importErrors' => 'No se pudo completar la importación correctamente',
  'admin.mergeUsers' => 'Fusionar usuarios/as',
  'admin.mergeUsers.mergeUser' => 'Fusionar usuario/a',
  'admin.mergeUsers.into.description' => 'Seleccione un usuario/a para atribuirle las autorías del anterior usuario/a, editar asignaciones, etc.',
  'admin.mergeUsers.from.description' => 'Seleccione uno (o varios) usuarios/as para fusionarlos en otra cuenta de usuario/a (p. ej. cuando algún usuario/a tiene dos cuentas distintas). La cuenta/s seleccionada en primer lugar será eliminada/s y todos los envíos, asignaciones, etc. se atribuirán a la segunda cuenta.',
  'admin.mergeUsers.allUsers' => 'Todos los usuarios/as registrados',
  'admin.mergeUsers.confirm' => '¿Está seguro/a de que desea fusionar la cuenta/s seleccionada {$oldAccountCount} con la cuenta con el nombre de usuario/a "{$newUsername}"? Las cuentas seleccionadas {$oldAccountCount} dejarán de existir. Esta acción no es reversible.',
  'admin.mergeUsers.noneEnrolled' => 'Usuarios/as no registrados.',
  'admin.categories' => 'Categorías',
  'admin.categories.enable.description' => 'El administrador/a del sitio puede definir un conjunto de categorías para organizar grandes conjuntos de revistas. Los gestores/as de revista pueden seleccionar varias de estas categorías para cada revista, y los lectores/as podrán examinar las colecciones de revistas por categorías.',
  'admin.categories.disableCategories' => 'No organizar las revistas por categorías.',
  'admin.categories.enableCategories' => 'Permitir a los gestores/as de revista organizar las revistas por categorías.',
  'admin.categories.editTitle' => 'Editar categoría',
  'admin.categories.createTitle' => 'Crear categoría',
  'admin.categories.create' => 'Crear categoría nueva',
  'admin.categories.noneCreated' => 'No se han creado categorías.',
  'admin.categories.confirmDelete' => '¿Está seguro/a de que desea eliminar la categoría?',
  'admin.categories.name' => 'Nombre',
  'admin.categories.nameRequired' => 'Se requiere un nombre para la categoría.',
  'admin.languages.confirmDisable' => '¿Está seguro de que desea desactivar esta configuración regional? Esto puede afectar a las revistas alojadas que actualmente usan esta configuración regional.',
  'admin.languages.downloadUnavailable' => '<p>La descarga de paquetes de lenguaje desde el servidor web de Public Knowledge Project no está disponible en este momento porque:</p>
	<ul>
		<li>Su servidor no dispone o no permite la ejecución de la utilidad GNU "tar".</li>
		<li>OJS no es capaz de modificar el archivo de registro de configuración regional, normalmente "registry/locales.xml".</li>
	</ul>
<p>Los paquetes de lenguaje se pueden descargar manualmente desde la página web de PKP <a href="https://pkp.sfu.ca"></a>.</p>',
  'admin.contexts.form.titleRequired' => 'Se necesita un título.',
  'admin.presses.createInstructions' => 'Usted será registrado automáticamente como administrador de esta revista. Tras la creación de la nueva revista será redireccionado al asistente de instalación para completar la configuración inicial de la revista.',
  'admin.scheduledTask.subscriptionExpiryReminder' => 'Recordatorio de caducidad de la suscripción',
  'admin.scheduledTask.openAccessNotification' => 'Notificación de acceso abierto',
  'admin.scheduledTask.reviewReminder' => 'Recordatorio de revisión',
); ?>