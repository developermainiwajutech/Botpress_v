  let text1 = 'Paris'
  bp.logger.info(text1)

  let text2 = ''
  bp.logger.info(text2)

  bp.logger.info(event.state.session)

  let nomPrenom = event.state.session.nom
  bp.logger.info(nomPrenom)
  let adresse = event.state.session.adresse
  bp.logger.info(adresse)
  let telephone = event.state.session.telephone
  bp.logger.info(telephone)
  let email = event.state.session.email
  bp.logger.info(email)
  let ville = event.state.session.ville
  bp.logger.info(ville)
  let date = event.state.session.date
  bp.logger.info(date)
  let destinataire = event.state.session.pers
  bp.logger.info(destinataire)
  let poste = event.state.session.poste
  bp.logger.info(poste)
  let objet = event.state.session.obj
  bp.logger.info(objet)
  let occupe = event.state.session.pos
  bp.logger.info(occupe)
  let formation = event.state.session.statut
  bp.logger.info(formation)
  let experience = event.state.session.exp
  bp.logger.info(experience)

  /** bp.logger.info(args)
  bp.logger.info(event.state)*/
  bp.logger.info('Lune')

  /**
   * Small description of your action
   * @title The title displayed in the flow editor
   * @category Custom
   * @author Your_Name
   * @param {string} name - An example string variable
   * @param {any} value - Another Example value
   */

  const axios = require('axios')
  const params = {
    nom_prenom: nomPrenom,
    adresse: adresse,
    telephone: telephone,
    email: email,
    date: date,
    ville: ville,
    nom_destinataire: destinataire,
    poste_destinataire: poste,
    objet: objet,
    poste_a_occupe: occupe,
    votre_formation: formation,
    experience_professionnelle: experience
  }
  async function makeGetRequest() {
    bp.logger.info('Paris')
    let res = await axios.post('http://127.0.0.1:8000/api/generation/lettremotivation', params)

    let data = res.data
    bp.logger.info(data)
    bp.logger.info('TU')
  }

  makeGetRequest()