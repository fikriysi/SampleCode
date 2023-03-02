package id.idproo.kotlinsample

object Shared {
    val oauth: OAuth = OAuth
}


object OAuth {
    const val issuer: String = "https://login.idproo.id"
    const val clientId: String = "6340830a-396a-4b51-9e61-68f633f0fd7b"
    const val redirect: String = "id.idproo.sample:/oauthredirect"
    const val endSessionRedirect: String = "id.idproo.sample:/"
}