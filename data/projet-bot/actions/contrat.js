  let text1 = 'Paris'
  bp.logger.info(text1)

  let text2 = ''
  bp.logger.info(text2)

  bp.logger.info(event.state.session)

  let annee = event.state.session.annee
  bp.logger.info(annee)
  let nomentreprise = event.state.session.entreprise
  bp.logger.info(nomentreprise)
  let ifu = event.state.session.ifu
  bp.logger.info(ifu)
  let lieu = event.state.session.lieu
  bp.logger.info(lieu)
  let nomperson = event.state.session.nom
  bp.logger.info(nomperson)
  let role = event.state.session.role
  bp.logger.info(role)
  let nemployer = event.state.session.client
  bp.logger.info(nemployer)
  let adresse = event.state.session.adresse
  bp.logger.info(adresse)
  let date = event.state.session.date
  bp.logger.info(date)
  let nation = event.state.session.nation
  bp.logger.info(nation)
  let close = event.state.session.close
  bp.logger.info(close)
  let poste = event.state.session.poste
  bp.logger.info(poste)
  let tache = event.state.session.tache
  bp.logger.info(tache)
  let temps = event.state.session.effet
  bp.logger.info(temps)
  let fin = event.state.session.fin
  bp.logger.info(fin)
  let essai = event.state.session.essai
  bp.logger.info(essai)
  let travail = event.state.session.travail
  bp.logger.info(travail)
  let heure = event.state.session.hetravail
  bp.logger.info(heure)
  let salaire = event.state.session.salaire
  bp.logger.info(salaire)
  let emp = event.state.session.noemp
  bp.logger.info(emp)
  let liredact = event.state.session.redact
  bp.logger.info(liredact)
  let redact = event.state.session.redacte
  bp.logger.info(redact)

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