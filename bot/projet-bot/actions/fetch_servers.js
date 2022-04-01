  const showMessage => {
    //afficher un message
    const mon_message = {
      type: 'text',
      text: '${message}',
      markdown: false
    }

    await bp.events.replyToEvent(event, [mon_message])

    bp.logger.info('${message}')
  }//end showMessage

  let nomPrenom = {}
  let adresse = {}
  let email = {}
  let lieu = {}
  let date = {}
  let objet = {}
  let institut = {}
  let profession = {}
  let duree = {}


  const genererDocument = async (nomPrenom, adresse, email, lieu, date, objet, institut, profession, duree)

    let apiResults = {}
    let paramsData = {
      nomPrenom: args.nomPrenom,
      adresse: args.adresse,
      email: args.email,
      lieu: args.lieu,
      date: args.date,
      objet: args.objet,
      institut: args.institut,
      profession: args.profession,
      duree: args.duree

    }
    bp.logger.info('${JSON.stringify(paramsData)}')
    bp.logger.info('${JSON.stringify(args.email)}')
    await axios.get('https://api-adresse.data.gouv.fr/reverse/?lon=2.37&lat=48.357', paramsData).then(
      content => {
        apiResults = content.data

        if (apiResults.status ==='error'){
          showMessage(apiResults.message)
          showMessage(apiResults.data)
          return
        }
        showMessage('Vous aurez une réponse dans vos mails')
      },
      error =>{
        bp.logger.info(error)
        showMessage('Nous avons eu une erreur lors de la vérification')
        return
      }
    )