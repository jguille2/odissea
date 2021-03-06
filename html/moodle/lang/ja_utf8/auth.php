<?PHP // $Id$ 
      // auth.php - created with Moodle 2.0 dev (Build: 20100118) (2010011400)


$string['CASform'] = '認証選択';
$string['accesCAS'] = 'CASユーザ';
$string['accesNOCAS'] = '他のユーザ';
$string['actauthhdr'] = '動作中の認証プラグイン';
$string['alternatelogin'] = 'ここにURIを入力した場合、このサイトのログインページとして使用されます。ログインページではaction属性に<strong>「 $a 」</strong>をセットして、 <strong>username</strong>フィールドおよび <strong>password</strong>フィールドをMoodleに渡してください。<br />間違ったURIを設定することで、あなたのサイトから締め出されることになりますので注意してください。<br />デフォルトのログイン画面を使用する場合、空白のままにしてください。';
$string['alternateloginurl'] = '代替ログインURI';
$string['auth_cas_auth_user_create'] = '外部にユーザを作成する';
$string['auth_cas_baseuri'] = 'サーバのURI (ベースURIが無い場合は空白)<br />例えば、CASサーバが host.domaine.fr/CAS/ に応答する場合、<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'ベースURI';
$string['auth_cas_broken_password'] = 'あなたのパスワードを変更せずに進むことはできませんが、利用できるパスワード変更ページがありません。あなたのMoodle管理者にご連絡ください。';
$string['auth_cas_cantconnect'] = 'CASモジュールのLDAPがサーバに接続できません: $a';
$string['auth_cas_casversion'] = 'バージョン';
$string['auth_cas_changepasswordurl'] = 'パスワード変更URI';
$string['auth_cas_create_user'] = 'MoodleデータベースにCAS認証済みユーザを追加したい場合、「Yes」を選択してください。「No」を選択した場合、Moodleデータベースに登録されているユーザのみログインできます。';
$string['auth_cas_create_user_key'] = 'ユーザを作成する';
$string['auth_cas_enabled'] = 'CAS認証を使用したい場合、「Yes」を選択してください。';
$string['auth_cas_hostname'] = 'CASサーバのホスト名<br />例: host.domaine.fr';
$string['auth_cas_hostname_key'] = 'ホスト名';
$string['auth_cas_invalidcaslogin'] = '申し訳ございません、ログインに失敗しました - あなたは認証されませんでした。';
$string['auth_cas_language'] = '言語の選択';
$string['auth_cas_language_key'] = '言語';
$string['auth_cas_logincas'] = 'セキュアコネクション・アクセス';
$string['auth_cas_logoutcas'] = 'Moodleからのログアウト時にCASからログアウトしたい場合、「Yes」を選択してください。';
$string['auth_cas_logoutcas_key'] = 'CASからログアウトする';
$string['auth_cas_multiauth'] = 'マルチ認証 (CAS + 他の認証) を使用したい場合、「Yes」を選択してください。';
$string['auth_cas_multiauth_key'] = 'マルチ認証';
$string['auth_cas_port'] = 'CASサーバのポート';
$string['auth_cas_port_key'] = 'ポート';
$string['auth_cas_proxycas'] = 'CASをプロクシモードで使用したい場合、「Yes」を選択してください。';
$string['auth_cas_proxycas_key'] = 'プロクシモード';
$string['auth_cas_server_settings'] = 'CASサーバ設定';
$string['auth_cas_text'] = 'セキュアコネクション';
$string['auth_cas_use_cas'] = 'CASを使用する';
$string['auth_cas_version'] = 'CASのバージョン';
$string['auth_casdescription'] = 'この認証方法では単一ログイン環境 (Single Sign On environment: SSO) にて、CASサーバ (Central Authentication Service) をユーザ認証に使用します。あなたはシンプルLDAP認証を使用することもできます。ユーザ名およびパスワードがCASで認証された場合、Moodleは新しいユーザエントリをデータベースに作成します。また、必要であれば、LDAPよりユーザ属性を取得します。次回からはユーザ名とパスワードのみ確認されます。';
$string['auth_casnotinstalled'] = 'CAS認証を使用できません。PHP LDAPモジュールがインストールされていません。';
$string['auth_castitle'] = 'CASサーバ (SSO)';
$string['auth_changepasswordhelp'] = 'パスワード変更のヘルプ';
$string['auth_changepasswordhelp_expl'] = 'ユーザが $a パスワードを忘れた場合、パスワード喪失ヘルプを表示します。これは<strong>パスワード変更URI</strong>またはMoodle内部のパスワード変更画面と同時、または代わりに表示されます。';
$string['auth_changepasswordurl'] = 'パスワード変更URI';
$string['auth_changepasswordurl_expl'] = '$a パスワードを忘れたユーザが使用するURIを指定してください。通常のパスワード変更ページを使用する場合、「No」を選択してください。';
$string['auth_changingemailaddress'] = 'あなたは $a->oldemail から $a->newemail へのメールアドレス変更をリクエストしました。セキュリティ上の理由から、新しいメールアドレスがあなたのメールアドレスか確認するため、私たちはあなたにメッセージを送信しています。このメッセージ内のURIにアクセスすることで、あなたのメールアドレスが更新されます。';
$string['auth_common_settings'] = '共通設定';
$string['auth_data_mapping'] = 'データマッピング';
$string['auth_dbcantconnect'] = '指定された認証データベースに接続できませんでした ...';
$string['auth_dbchangepasswordurl_key'] = 'パスワード変更URI';
$string['auth_dbdebugauthdb'] = 'ADOdbデバッグ';
$string['auth_dbdebugauthdbhelp'] = '外部データベースへのADOdbデバッグ接続 - ログイン時に空白ページが表示される場合、使用してください。実稼動サイトには適していません。';
$string['auth_dbdeleteuser'] = 'ユーザ $a[0] id $a[1] を削除しました。';
$string['auth_dbdeleteusererror'] = 'ユーザ $a の削除中にエラーが発生しました。';
$string['auth_dbdescription'] = 'ユーザ名およびパスワードを確認するため、外部データベースを使用します。新しいアカウントを作成する場合、他のフィールドの情報がMoodleへコピーされます。';
$string['auth_dbextencoding'] = '外部データベースエンコーディング';
$string['auth_dbextencodinghelp'] = '外部データベースで使用されるエンコーディングです。';
$string['auth_dbextrafields'] = 'これらのフィールドは任意項目です。あなたは<b>外部データベースフィールド</b>より、事前に入力されたMoodleユーザフィールドを選択することもできます。<p>空白の場合、デフォルト値が使用されます。</p><p>どちらの場合でも、ユーザはログイン後、すべてのフィールドを編集することができます。</p>';
$string['auth_dbfieldpass'] = 'パスワードを含んだフィールド名';
$string['auth_dbfieldpass_key'] = 'パスワードフィールド';
$string['auth_dbfielduser'] = 'ユーザ名を含んだフィールド名';
$string['auth_dbfielduser_key'] = 'ユーザ名フィールド';
$string['auth_dbhost'] = 'データベースサーバが稼動しているコンピュータ';
$string['auth_dbhost_key'] = 'ホスト';
$string['auth_dbinsertuser'] = '登録ユーザ $a[0]  ID $a[1]';
$string['auth_dbinsertusererror'] = 'ユーザ登録エラー $a';
$string['auth_dbname'] = 'データベース名';
$string['auth_dbname_key'] = 'データベース名';
$string['auth_dbpass'] = '上記ユーザ名に合致するパスワード';
$string['auth_dbpass_key'] = 'パスワード';
$string['auth_dbpasstype'] = '<p>パスワードフィールドで使用するフォーマットを指定してください。MD5暗号化はPostNukeのような他の一般的なウェブアプリケーションへの接続に有用です。</p><p>外部データベースでユーザ名およびメールアドレスを管理したい場合、「内部」を使用してください。パスワードに関してはMoodleが管理します。「内部」を使用する場合、外部データベースのメールアドレスフィールドを提供して、定期的に admin/cron.php および auth/db/auth_db_sync_users.php を実行してください。Moodleが新しいユーザに仮パスワードをメール送信します。</p>';
$string['auth_dbpasstype_key'] = 'パスワードフォーマット';
$string['auth_dbreviveduser'] = '回復ユーザ $a[0] id $a[1]';
$string['auth_dbrevivedusererror'] = 'ユーザ $a の回復中にエラーが発生しました。';
$string['auth_dbsetupsql'] = 'SQLセットアップコマンド';
$string['auth_dbsetupsqlhelp'] = '特別データベースセットアップ用のSQLコマンドです。多くの場合、コミュニケーションエンコーディングのセットアップに使用されます - 例 MySQLおよびPostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = '一時停止ユーザ $a[0] id $a[1]';
$string['auth_dbsuspendusererror'] = 'ユーザ $a の一時停止中にエラーが発生しました。';
$string['auth_dbsybasequoting'] = 'Sybaseクオートを使用する';
$string['auth_dbsybasequotinghelp'] = 'Sybaseスタイルのシングルクオートエスケープです - Oracle、MS SQLおよび他のデータベースが必要です。MySQLには使用しないでください!';
$string['auth_dbtable'] = 'データベースのテーブル名';
$string['auth_dbtable_key'] = 'テーブル';
$string['auth_dbtitle'] = '外部データベース';
$string['auth_dbtype'] = 'データベースタイプ (詳細は<a href=../lib/adodb/readme.htm#drivers>ADOdb documentation</a>をご覧ください)';
$string['auth_dbtype_key'] = 'データベース';
$string['auth_dbupdatinguser'] = '更新ユーザ $a[0] id $a[1]';
$string['auth_dbuser'] = 'データベースアクセス用のユーザ名';
$string['auth_dbuser_key'] = 'データベースユーザ';
$string['auth_dbusernotexist'] = '登録されていないユーザを更新できません: $a';
$string['auth_dbuserstoadd'] = '追加するユーザエントリ: $a';
$string['auth_dbuserstoremove'] = '削除するユーザエントリ: $a';
$string['auth_emailchangecancel'] = 'メール変更をキャンセルする';
$string['auth_emailchangepending'] = '変更保留中です。あなたのメールアドレス $a->preference_newemail に送信されたメッセージ内のリンクにアクセスしてください。';
$string['auth_emaildescription'] = 'メールによるアカウント登録確認はデフォルトの認証方法です。ユーザが新しいユーザ名とパスワードを選択してサインアップした場合、アカウント確定用メールがユーザのメールアドレスに送信されます。このメールにはユーザがアカウント登録を確認するためのリンクが記載されています。アカウント確定後のログインではMoodleデータベースに保存されているユーザ名およびパスワードのみを確認します。';
$string['auth_emailnoemail'] = 'あなたへのメール送信に失敗しました!';
$string['auth_emailnoinsert'] = 'あなたのレコードをデータベースに追加できませんでした!';
$string['auth_emailnowexists'] = 'あなたのプロファイルに割り当てようと試みたメールアドレスはあなたがリクエストした後、他のユーザに割り当てられています。このため、あなたのメールアドレス変更はキャンセルされましたが、他のアドレスを割り当てることはできます。';
$string['auth_emailrecaptcha'] = 'Eメールによる自己登録ユーザのため、サインアップページにビジュアル/オーディオ確認フォーム要素を追加します。これはあなたのサイトをスパム発信者から守り、価値ある活動に貢献します。詳細はhttp://recaptcha.net/learnmore.html をご覧ください。<br />PHP cURL拡張モジュールが必須です。';
$string['auth_emailrecaptcha_key'] = 'reCAPTCHA要素を有効にする';
$string['auth_emailsettings'] = '設定';
$string['auth_emailtitle'] = 'Eメールによる自己登録';
$string['auth_emailupdate'] = 'メールアドレス更新';
$string['auth_emailupdatemessage'] = '$a->fullname さん

あなたは $a->site のアカウントに関するメールアドレスの変更をリクエストしました。この変更を確認するには、あなたのブラウザで以下のURIにアクセスしてください。

$a->url';
$string['auth_emailupdatesuccess'] = 'ユーザ <em>$a->fullname</em> のメールアドレスが、正常に <em>$a->email</em> に変更されました。';
$string['auth_emailupdatetitle'] = '$a->site のメール更新確認';
$string['auth_fcchangepasswordurl'] = 'パスワード変更URI';
$string['auth_fcconnfail'] = '接続に失敗しました。エラー番号: $a[0] エラーストリング: $a[1]';
$string['auth_fccreators'] = 'メンバーがコースの作成を許可されているグループの一覧です。複数のグループは「;」で区切ってください。グループ名はFirstClassサーバと厳密に同じ名称にしてください。システムは大文字と小文字を区別します。';
$string['auth_fccreators_key'] = 'コース作成者';
$string['auth_fcdescription'] = 'ここではユーザ名およびパスワードが正しいかチェックするため、FisrtClassサーバを使用します。';
$string['auth_fcfppport'] = 'サーバポート (3333が最も一般的です)';
$string['auth_fcfppport_key'] = 'ポート';
$string['auth_fchost'] = 'FirstClassサーバアドレスです。IPアドレスまたはDNS名を使用してください。';
$string['auth_fchost_key'] = 'ホスト';
$string['auth_fcpasswd'] = '上記アカウントのパスワード';
$string['auth_fcpasswd_key'] = 'パスワード';
$string['auth_fctitle'] = 'FirstClassサーバ';
$string['auth_fcuserid'] = '権限「Subadministrator」セットを持ったFirstClassアカウントのユーザIDです。';
$string['auth_fcuserid_key'] = 'ユーザID';
$string['auth_fieldlock'] = '設定値のロック';
$string['auth_fieldlock_expl'] = '<p><b>設定値のロック:</b> このオプションを有効にした場合、Moodleユーザおよび管理者によるフィールドの直接編集を防ぎます。外部認証システムにデータを保持している場合、このオプションを使用してください。</p>';
$string['auth_fieldlocks'] = 'ユーザフィールドのロック';
$string['auth_fieldlocks_help'] = '<p>あなたはユーザデータフィールドをロックすることができます。ユーザレコードを管理者が手動で管理する方法、または「ユーザのアップロード」機能を使用してユーザレコードをアップロードする方法をとっているサイトに有用です。Moodleが必要とするフィールドをロックする場合、ユーザアカウント作成時にそれらのデータを必ず提供してください。そうでない場合、アカウントを使用できなくなります。</p><p>この問題を避けるため、「空の場合はロックしない」に設定することをお勧めします。</p>';
$string['auth_imapchangepasswordurl_key'] = 'パスワード変更URI';
$string['auth_imapdescription'] = 'ユーザ名およびパスワードを確認するためIMAPサーバを使用します。';
$string['auth_imaphost'] = 'IMAPサーバアドレスです。DNS名ではなく、IPアドレスを使用してください。';
$string['auth_imaphost_key'] = 'ホスト';
$string['auth_imapnotinstalled'] = 'IMAP認証を使用できません。PHP IMAPモジュールがインストールされていません。';
$string['auth_imapport'] = 'IMAPサーバポート番号です。通常、143または993です。';
$string['auth_imapport_key'] = 'ポート';
$string['auth_imaptitle'] = 'IMAPサーバ';
$string['auth_imaptype'] = 'IMAPサーバタイプです。IMAPサーバでは異なる認証およびネゴシエーションを使用することができます。';
$string['auth_imaptype_key'] = 'タイプ';
$string['auth_invalidnewemailkey'] = 'エラー: あなたがメールアドレスの変更確認を試みているのでしたら、あなたに送信されたメール内のURIのコピーに失敗しているようです。URIをコピーして、もう一度お試しください。';
$string['auth_ldap_ad_create_req'] = 'Active Directoryに新しいアカウントを作成できません。アカウントを作成するためのすべての必要条件 (LDAPSコネクション、必要な権限を持ったユーザのバインド等) に合致しているか確認してください。';
$string['auth_ldap_attrcreators'] = 'メンバーが属性の作成を許可されているグループまたはコンテクストの一覧です。複数のグループは「;」で区切ってください。通常、「cn=teachers,ou=staff,o=myorg」のように指定します。';
$string['auth_ldap_attrcreators_key'] = '属性作成者';
$string['auth_ldap_auth_user_create_key'] = '外部にユーザを作成する';
$string['auth_ldap_bind_dn'] = 'あなたがユーザ検索にバインドユーザを使用したい場合、ここで指定してください。「cn=ldapuser,ou=public,o=org」のように指定します。';
$string['auth_ldap_bind_dn_key'] = '識別名';
$string['auth_ldap_bind_pw'] = 'ユーザバインドのパスワード';
$string['auth_ldap_bind_pw_key'] = 'パスワード';
$string['auth_ldap_bind_settings'] = 'バインド設定';
$string['auth_ldap_changepasswordurl_key'] = 'パスワード変更URI';
$string['auth_ldap_contexts'] = 'ユーザが配置されているコンテクスト一覧です。異なるコンテクストは「;」で区切ってください。例 「ou=users,o=org; ou=others,o=org」';
$string['auth_ldap_contexts_key'] = 'コンテクスト';
$string['auth_ldap_create_context'] = 'メールによるアカウント登録確認を使用してユーザを作成する場合、ユーザが作成されるコンテクストを指定してください。セキュリティの観点から、このコンテクストはユーザごとに異なるものにしてください。Moodleがコンテクストから自動的にユーザを探しますので、このコンテクストをldap_context-vaiableに追加する必要はありません。<br /><b>注意!</b> ユーザ作成を動作させるため、あなたはauth/ldap/auth.phpファイルのuser_create() 関数を修正する必要があります。';
$string['auth_ldap_create_context_key'] = '新しいユーザのコンテクスト';
$string['auth_ldap_create_error'] = 'LDAPユーザ作成中にエラーが発生しました。';
$string['auth_ldap_creators'] = 'メンバーが新しいコースの作成を許可されているグループまたはコンテクストの一覧です。複数のグループは「;」で区切ってください。通常、「cn=teachers,ou=staff,o=myorg」のように指定します。';
$string['auth_ldap_creators_key'] = 'コース作成者';
$string['auth_ldap_expiration_desc'] = 'パスワードチェックの有効期限を無効にする場合、またはLDAPがLDAPサーバから直接passwordexpirationを参照する場合、「No」を選択してください。';
$string['auth_ldap_expiration_key'] = '有効期限切れ';
$string['auth_ldap_expiration_warning_desc'] = 'パスワードの有効期限切れを警告するまでの日数を入力してください。';
$string['auth_ldap_expiration_warning_key'] = '有効期限切れを警告';
$string['auth_ldap_expireattr_desc'] = '任意: パスワード有効期限を保持するldap属性をオーバーライドします。';
$string['auth_ldap_expireattr_key'] = '有効期限切れ属性';
$string['auth_ldap_graceattr_desc'] = '任意: 猶予ログイン属性をオーバーライドします。';
$string['auth_ldap_gracelogin_key'] = '猶予ログイン属性';
$string['auth_ldap_gracelogins_desc'] = 'LDAPの猶予ログインサポートを有効にします。パスワードの有効期限が切れた後、猶予ログインカウントがゼロになるまでログインすることができます。この設定を「Yes」にすることで、パスワードが有効期限切れになった場合に猶予ログインメッセージが表示されます。';
$string['auth_ldap_gracelogins_key'] = '猶予ログイン';
$string['auth_ldap_groupecreators'] = 'メンバーがグループの作成を許可されているグループまたはコンテクストの一覧です。複数のグループは「;」で区切ってください。通常、「cn=teachers,ou=staff,o=myorg」のように指定します。';
$string['auth_ldap_groupecreators_key'] = 'グループ作成者';
$string['auth_ldap_host_url'] = 'LDAPホストのURIを「ldap://ldap.myorg.com/」または「ldaps://ldap.myorg.com/」のように明示してください。複数サーバのフェイルオーバーをサポートするには、「;」で区切ってください。<br/><br/>注意: あなたがこの値を設定しない場合、MoodleはLDAPからユーザ情報を取得/更新することができません。しかし、あなたが下記で指定したフィールドのロックは配慮されます。';
$string['auth_ldap_host_url_key'] = 'ホストURI';
$string['auth_ldap_ldap_encoding'] = 'LDAPサーバで使用するエンコーディングを指定してください。ほとんどの場合はUTF-8ですが、MS AD v2ユーザデフォルトプラットフォームのエンコーディングはcp1252、cp1250等のようになります。';
$string['auth_ldap_ldap_encoding_key'] = 'LDAPエンコーディング';
$string['auth_ldap_login_settings'] = 'ログイン設定';
$string['auth_ldap_memberattribute'] = '任意: ユーザがグループに属している場合、ユーザメンバーをオーバライドします。通常、「member」です。';
$string['auth_ldap_memberattribute_isdn'] = '任意: メンバー属性値を0または1でオーバーライドします。';
$string['auth_ldap_memberattribute_isdn_key'] = 'ユーザDNのメンバー属性';
$string['auth_ldap_memberattribute_key'] = 'メンバー属性';
$string['auth_ldap_no_mbstring'] = 'Active Directoryにアカウントを作成するには、mbstring拡張モジュールが必要です。';
$string['auth_ldap_noconnect'] = 'LDAPモジュールがサーバに接続できません: $a';
$string['auth_ldap_noconnect_all'] = 'LDAPモジュールがすべてのサーバに接続できません: $a';
$string['auth_ldap_noextension'] = '警告: PHP LDAPモジュールがインストールされていないようです。PHP LDAPモジュールがインストールおよび有効にされているかどうか確認してください。';
$string['auth_ldap_objectclass'] = '任意: ldap_user_typeのname/searchユーザで使用されるオブジェクトクラスをオーバーライドします。通常、この設定を変更する必要はありません。';
$string['auth_ldap_objectclass_key'] = 'オブジェクトクラス';
$string['auth_ldap_opt_deref'] = '検索時、エイリアスをどのように扱うか、次の値から選択してください: 「No」(LDAP_DEREF_NEVER) または 「Yes」(LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'エイリアスの修飾参照';
$string['auth_ldap_passtype'] = 'LDAPサーバで使用する新規または変更パスワードのフォーマットを指定してください。';
$string['auth_ldap_passtype_key'] = 'パスワードフォーマット';
$string['auth_ldap_passwdexpire_settings'] = 'LDAPパスワード有効期限設定';
$string['auth_ldap_preventpassindb'] = 'Moodleデータベースにパスワードが保存されることを防ぐには「Yes」を選択してください。';
$string['auth_ldap_preventpassindb_key'] = 'パスワードを秘匿する';
$string['auth_ldap_search_sub'] = 'サブコンテクストからユーザを検索します。';
$string['auth_ldap_search_sub_key'] = 'サブコンテクストを検索する';
$string['auth_ldap_server_settings'] = 'LDAPサーバ設定';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() は選択された次のユーザタイプをサポートしていません: $a (..まだ)';
$string['auth_ldap_update_userinfo'] = 'LDAPよりMoodleのユーザ情報 (姓、名、住所等) を更新します。必要に応じて、「データマッピング」設定を指定してください。';
$string['auth_ldap_user_attribute'] = '任意: name/searchユーザに使用される属性をオーバーライドします。通常は「cn」です。';
$string['auth_ldap_user_attribute_key'] = 'ユーザ属性';
$string['auth_ldap_user_exists'] = 'LDAPユーザ名はすでに登録されています。';
$string['auth_ldap_user_settings'] = 'ユーザルックアップ設定';
$string['auth_ldap_user_type'] = 'ユーザがどのようにLDAPに保存されるか選択してください。また、この設定ではどのようにログイン有効期限、猶予ログイン、ユーザ作成が動作するのか指定します。';
$string['auth_ldap_user_type_key'] = 'ユーザタイプ';
$string['auth_ldap_usertypeundefined'] = 'config.user_typeが定義されていないか、動作していません。ldap_expirationtime2unixは選択されたユーザタイプをサポートしていません!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_typeが定義されていないか、動作していません。ldap_unixi2expirationtimeは選択されたユーザタイプをサポートしていません!';
$string['auth_ldap_version'] = 'あなたのサーバが使用しているLDAPプロトコルのバージョンです。';
$string['auth_ldap_version_key'] = 'バージョン';
$string['auth_ldapdescription'] = 'この方法では外部のLDAPサーバに対して認証を提供します。ユーザ名およびパスワードが正しい場合、Moodleは新しいユーザエントリをデータベースに作成します。このモジュールではユーザ属性をLDAPから取得して、Moodleのフィールドに入力することができます。認証後のログインではユーザ名およびパスワードのみ確認されます。';
$string['auth_ldapextrafields'] = 'これらのフィールドは任意項目です。事前に入力されたMoodleユーザフィールドを<b>LDAPフィールド</b>から選択することも可能です。<p>空白の場合、LDAPよりデータは転送されず、代わりにMoodleのデフォルト値が使用されます。</p><p>どちらの場合でも、ユーザはログイン後、すべてのフィールドを編集することができます。</p>';
$string['auth_ldapnotinstalled'] = 'LDAP認証を使用できません。PHP LDAPモジュールがインストールされていません。';
$string['auth_ldaptitle'] = 'LDAPサーバ';
$string['auth_manualdescription'] = 'この方法ではユーザによるユーザアカウント作成機能を停止します。すべてのアカウントは管理者により手動で作成される必要があります。';
$string['auth_manualtitle'] = '手動アカウント作成';
$string['auth_mnet_auto_add_remote_users'] = '「Yes」にした場合、リモートユーザの初回ログイン時、ローカルユーザのレコードが自動作成されます。';
$string['auth_mnet_roamin'] = '次のホストのユーザはあなたのサイトを散策できます';
$string['auth_mnet_roamout'] = 'あなたのユーザは次のホストを散策できます';
$string['auth_mnet_rpc_negotiation_timeout'] = 'XMLRPCトランスポートによる認証のタイムアウト (秒)';
$string['auth_mnetdescription'] = 'あなたのMoodleネットワーク設定で定義されたウェブ認証方法に従って、ユーザが認証されます。';
$string['auth_mnettitle'] = 'Moodleネットワーク認証';
$string['auth_multiplehosts'] = '複数のホストまたはアドレスを設定できます (例 host1.com;host2.com;host3.com) または (例 xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_nntpchangepasswordurl_key'] = 'パスワード変更URI';
$string['auth_nntpdescription'] = 'ユーザ名およびパスワードを確認するため、NNTPサーバを使用します。';
$string['auth_nntphost'] = 'NNTPサーバアドレスです。DNS名ではなく、IPアドレスを使用してください。';
$string['auth_nntphost_key'] = 'ホスト';
$string['auth_nntpnotinstalled'] = 'NNTP認証を使用できません。PHP IMAPモジュールがインストールされていません。';
$string['auth_nntpport'] = 'サーバポート (119が最も一般的です)';
$string['auth_nntpport_key'] = 'ポート';
$string['auth_nntptitle'] = 'NNTPサーバ';
$string['auth_nologindescription'] = 'システムへのユーザによるログインを停止するための予備的なプラグインです。また、ユーザ宛に送信されるメールもすべて破棄されます。ユーザアカウントを「一時停止」する場合に使用することができます。';
$string['auth_nologintitle'] = 'ログインなし';
$string['auth_nonedescription'] = 'ユーザはログインした後、外部サーバおよびメールによる確認なしで、有効なアカウントを直ちに作成できます。このオプションを使用する場合、十分に注意してください - セキュリティおよび管理上の問題が発生する可能性があることを考えてください。';
$string['auth_nonetitle'] = '認証なし';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = '「Yes」にした場合、NTLMドメインでシングルサインオンを試みます。<strong>注意:</strong> これを動作させるにはウェブサーバに対して、追加セットアップが必要です。詳細は<a href=\"http://docs.moodle.org/en/NTLM_authentication\">http://docs.moodle.org/en/NTLM_authentication</a>をご覧ください。';
$string['auth_ntlmsso_enabled_key'] = '有効';
$string['auth_ntlmsso_ie_fastpath'] = '「Yes」にした場合、NTLM SSO高速経路 (fast path) が有効にされます (特定のステップをバイパスします。また、クライアントブラウザがMS Internet Explorerの場合のみ動作します)。';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE fast path?';
$string['auth_ntlmsso_subnet'] = '設定した場合、このサブネット内のクライアントのみSSOを試みます。フォーマット: xxx.xxx.xxx.xxx/ビットマスク';
$string['auth_ntlmsso_subnet_key'] = 'サブネット';
$string['auth_outofnewemailupdateattempts'] = 'あなたはメールアドレスの変更許容回数を超えました。あなたのメール変更リクエストはキャンセルされました。';
$string['auth_pamdescription'] = 'この方法ではこのサーバのネイティブユーザ名にアクセスする手段として、PAMを使用します。このモジュールを使用するために、あなたは<a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\">PHP4 PAM Authentication</a>をインストールする必要があります。';
$string['auth_pamtitle'] = 'PAM (Pluggable Authentication Modules)';
$string['auth_passwordisexpired'] = 'あなたのパスワード有効期限が切れました。あなたのパスワードを変更しますか?';
$string['auth_passwordwillexpire'] = 'あなたのパスワードの有効期限は$a 日で切れます。あなたのパスワードを変更しますか?';
$string['auth_pop3changepasswordurl_key'] = 'パスワード変更URI';
$string['auth_pop3description'] = 'この方法ではユーザ名およびパスワードが有効かどうかチェックするため、POP3サーバを使用します。';
$string['auth_pop3host'] = 'POP3サーバアドレスです。DNS名ではなく、IPアドレスを使用してください。';
$string['auth_pop3host_key'] = 'ホスト';
$string['auth_pop3mailbox'] = '接続を試みるメールボックス名 (通常「INBOX」です)';
$string['auth_pop3mailbox_key'] = 'メールボックス';
$string['auth_pop3notinstalled'] = 'POP3認証を使用できません。PHP IMAPモジュールがインストールされていません。';
$string['auth_pop3port'] = 'サーバポート (110は最も一般的、995は一般的なSSL用)';
$string['auth_pop3port_key'] = 'ポート';
$string['auth_pop3title'] = 'POP3サーバ';
$string['auth_pop3type'] = 'サーバタイプです。セキュリティ証明が必要な場合、pop3certを選択してください。';
$string['auth_pop3type_key'] = 'タイプ';
$string['auth_radiuschangepasswordurl_key'] = 'パスワード変更URI';
$string['auth_radiusdescription'] = 'この方法では与えられたユーザ名およびパスワードが有効かどうかチェックするため、<a href=\"http://en.wikipedia.org/wiki/RADIUS\">RADIUS</a>サーバを使用します。';
$string['auth_radiushost'] = 'RADIUSサーバのアドレス';
$string['auth_radiushost_key'] = 'ホスト';
$string['auth_radiusnasport'] = '接続に使用するポート';
$string['auth_radiusnasport_key'] = 'ポート';
$string['auth_radiussecret'] = '共有鍵';
$string['auth_radiussecret_key'] = '鍵';
$string['auth_radiustitle'] = 'RADIUSサーバ';
$string['auth_radiustype'] = 'RADIUSサーバで使用する認証スキームを選択してください。';
$string['auth_radiustype_key'] = '認証';
$string['auth_radiustypechapmd5'] = 'CHAP MD5';
$string['auth_radiustypemschapv1'] = 'Microsoft CHAP version 1';
$string['auth_radiustypemschapv2'] = 'Microsoft CHAP version 2';
$string['auth_radiustypepap'] = 'PAP';
$string['auth_remove_delete'] = '内部を完全に削除する';
$string['auth_remove_keep'] = '内部に保持する';
$string['auth_remove_suspend'] = '内部を一時停止する';
$string['auth_remove_user'] = '外部ソースからユーザが削除された場合、大量同期化時にどのように内部ユーザを処理するか指定してください。外部ソースのユーザが回復された場合、一時停止ユーザのみ自動的に回復されます。';
$string['auth_remove_user_key'] = '削除された外部ユーザ';
$string['auth_shib_auth_method'] = '認証メソッド名';
$string['auth_shib_auth_method_description'] = 'Shibboleth認証メソッドに関して、あなたのユーザに知られている名称を入力してください。あなたのシボレス連盟の名称を使うこともできます 例) <tt>SWITCHaai Login</tt>または<tt>InCommon Login</tt>または同様の名称。';
$string['auth_shib_changepasswordurl'] = 'パスワード変更URI';
$string['auth_shib_convert_data'] = 'データ修正API';
$string['auth_shib_convert_data_description'] = 'あなたがShibbolethから提供されるデータを修正したい場合、このAPIを使うことができます。詳細は<a href=\"../auth/shibboleth/README.txt\">README</a>をご覧ください。';
$string['auth_shib_convert_data_warning'] = 'ファイルが存在しないか、ウェブサーバプロセスで読み取れません!';
$string['auth_shib_idp_list'] = 'アイデンティティプロバイダ';
$string['auth_shib_idp_list_description'] = 'ログインページでユーザが選択できるよう、アイデンティティプロバイダのエンティティIDリストを入力してください。<br />それぞれの行にはアイデンティティプロバイダのエンティティIDに関するカンマ区切りのタプル (tuple) を入力してください (詳細はShibbolethメタデータファイルをご覧ください)。アイデンティティプロバイダ名がドロップダウンリストに表示されます。<br />あなたのMoodleが複数連盟設定の一部にある場合、任意の第3パラメータとして、Shibbolethセッションイニシエータのロケーションを追加することができます。';
$string['auth_shib_instructions'] = 'あなたのインスティテューションがShibbolethをサポートしている場合、Shibboleth経由のアクセスには<a href=\"$a\">Shibbolethログイン</a>を使用してください。 <br />Shibbolethをサポートしていない場合、ここに表示される通常ログインフォームを使用してください。';
$string['auth_shib_instructions_help'] = 'Shibbolethに関して、ユーザに提示する説明文です。 これはログインページの説明セクションに表示されます。Shibbolethユーザが簡単にログインできるよう、「<b>$a</b>」 のようなリンクを含んでください。';
$string['auth_shib_integrated_wayf'] = 'Moodle WAYFサービス';
$string['auth_shib_integrated_wayf_description'] = 'チェックした場合、MoodleはShibbolethで設定されたWAYFサービスを使用するのではなく、独自のWAYFサービスを使用します。この代替ログインページのため、Moodleはユーザがアイデンティティプロバイダを選択できるドロップダウンリストを表示します。';
$string['auth_shib_logout_return_url'] = '代替ログアウト戻りURI';
$string['auth_shib_logout_return_url_description'] = 'ログアウト後、ShibbolethユーザがリダイレクトされるURIを入力してください。<br />空にした場合、ユーザはMoodleがリダイレクトする場所にリダイレクトされます。';
$string['auth_shib_logout_url'] = 'ShibbolethサービスプロバイダのログアウトハンドラURI';
$string['auth_shib_logout_url_description'] = 'ShibbolethサービスプロバイダのログアウトハンドラのURIを入力してください。一般的に、<tt>/Shibboleth.sso/Logout</tt>のようになります。';
$string['auth_shib_no_organizations_warning'] = 'あなたが統合WAYFサービスを使用したい場合、カンマで区切ったアイデンティティプロバイダのエンティティID、名称およびセッションイニシエータのリストを入力してください。';
$string['auth_shib_only'] = 'Shibbolethのみ';
$string['auth_shib_only_description'] = 'Shibboleth認証を強制する場合、このオプションをチェックしてください。';
$string['auth_shib_username_description'] = 'Moodleユーザ名として使用されるShibbolethウェブサーバ環境のユーザ名です。';
$string['auth_shibboleth_contact_administrator'] = 'あなたが特定の組織と関係せず、このサーバのコースにアクセスする必要がある場合、Moodle管理者にご連絡ください:';
$string['auth_shibboleth_errormsg'] = 'あなたがメンバーになっている組織を選択してください!';
$string['auth_shibboleth_login'] = 'Shibbolethログイン';
$string['auth_shibboleth_login_long'] = 'Shibboleth経由でMoodleにログインする';
$string['auth_shibboleth_manual_login'] = '手動ログイン';
$string['auth_shibboleth_select_member'] = '私は ...';
$string['auth_shibboleth_select_organization'] = 'Shibboleth経由の認証のため、あなたの組織をドロップダウンリストから選択してください。';
$string['auth_shibbolethdescription'] = 'この認証方法により、<a href=\"http://shibboleth.internet2.edu/\">Shibboleth</a>を使用して、ユーザが作成および認証されます。<br />あなたが使用しているMoodleにShibbolethを設定するには、<a href=\"../auth/shibboleth/README.txt\">README</a>をご覧ください。';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['auth_sync_script'] = 'Cron同期化スクリプト';
$string['auth_updatelocal'] = 'ローカルデータの更新';
$string['auth_updatelocal_expl'] = '<p><b>ローカルデータの更新:</b> この設定を有効にした場合、このフィールドは (外部認証を通して) ログイン毎またはユーザの同期ごとに更新されます。更新されるローカルフィールドはロックする必要があります。</p>';
$string['auth_updateremote'] = '外部データの更新';
$string['auth_updateremote_expl'] = '<p><b>外部データの更新:</b> この設定を有効にした場合、ユーザレコードが更新されるときに外部認証が更新されます。編集を許可するには、フィールドのロックを解除する必要があります。</p>';
$string['auth_updateremote_ldap'] = '<p><b>注意:</b> 外部LDAPデータを更新するには、すべてのユーザレコードに書き込み権を持ったバインドユーザに対して、binddnおよびbindpwを設定する必要があります。現在、多値属性を保持することはできません。また、超過した値は更新時に取り除かれます。</p>';
$string['auth_user_create'] = 'ユーザの作成';
$string['auth_user_creation'] = '新しい (匿名) ユーザは外部認証元のユーザアカウントを作成することができます。また、メールによりアカウント登録が確認されます。このオプションを有効にした場合、モジュール特有のオプションも同時に設定する必要があります。';
$string['auth_usernameexists'] = 'このユーザ名はすでに登録されています。新しいものを選んでください。';
$string['authenticationoptions'] = '認証オプション';
$string['authinstructions'] = 'ここであなたはどのようなユーザ名やパスワードを使用したらよいのかユーザに説明することができます。ここに入力したテキストはログインページに表示されます。空白の場合、何も表示されません。';
$string['auto_add_remote_users'] = 'リモートユーザを自動的に追加する';
$string['changepassword'] = 'パスワードURIの変更';
$string['changepasswordhelp'] = 'ここではあなたのユーザがパスワードを忘れた場合、ユーザ名/パスワードを回復または変更するためのロケーションを設定します。これはログインページおよびユーザページにボタンとして提供されます。ここを空白にした場合、ボタンは表示されません。';
$string['chooseauthmethod'] = '認証方法の選択:';
$string['createpasswordifneeded'] = '必要に応じてパスワードを作成する';
$string['enterthenumbersyouhear'] = 'あなたに聞こえる数字を入力してください';
$string['enterthewordsabove'] = '上記の言葉を入力してください。';
$string['errormaxconsecutiveidentchars'] = 'パスワードには最大 $a 文字の連続した同一文字を使用する必要があります。';
$string['errorminpassworddigits'] = 'パスワードには少なくとも半角 $a 文字の数字を使用する必要があります。';
$string['errorminpasswordlength'] = 'パスワードには少なくとも半角 $a 文字使用する必要があります。';
$string['errorminpasswordlower'] = 'パスワードには少なくとも半角 $a 文字の小文字を使用する必要があります。';
$string['errorminpasswordnonalphanum'] = 'パスワードには少なくとも半角 $a 文字の非英数字を使用する必要があります。';
$string['errorminpasswordupper'] = 'パスワードには少なくとも半角 $a 文字の大文字を使用する必要があります。';
$string['errorpasswordupdate'] = 'パスワード変更中にエラーが発生しました。パスワードは変更されませんでした。';
$string['forcechangepassword'] = 'パスワード変更の強制';
$string['forcechangepassword_help'] = '次にMoodleへログインするときに、ユーザのパスワード変更を強制します。';
$string['forcechangepasswordfirst_help'] = '最初にMoodleへログインするときに、ユーザのパスワード変更を強制します。';
$string['forgottenpassword'] = 'あなたがここにURIを入力した場合、このサイトの喪失パスワードリカバリページに使用されます。これは完全にMoodleの外でパスワードが処理されるサイトを対象としています。デフォルトのパスワードリカバリを使用する場合、空白のままにしてください。';
$string['forgottenpasswordurl'] = 'パスワード喪失URI';
$string['getanaudiocaptcha'] = 'CAPTCHAオーディオを取得する';
$string['getanimagecaptcha'] = 'CAPTCHAイメージを取得する';
$string['getanothercaptcha'] = '別のCAPTCHAを取得する';
$string['guestloginbutton'] = 'ゲストログインボタン';
$string['incorrectpleasetryagain'] = '正しくありません、もう一度お試しください。';
$string['infilefield'] = 'ファイルのパスワードフィールドを使用する';
$string['informminpassworddigits'] = '少なくとも $a 個の数字';
$string['informminpasswordlength'] = '少なくとも $a 文字';
$string['informminpasswordlower'] = '少なくとも $a 文字の小文字';
$string['informminpasswordnonalphanum'] = '少なくとも $a 文字の非英数字';
$string['informminpasswordupper'] = '少なくとも $a 文字の大文字';
$string['informpasswordpolicy'] = 'パスワードには$a を入力する必要があります。';
$string['instructions'] = '説明';
$string['internal'] = '内部';
$string['locked'] = 'ロックする';
$string['md5'] = 'MD5暗号化';
$string['nopasswordchange'] = 'パスワードを変更することはできません。';
$string['nopasswordchangeforced'] = 'あなたはパスワードを変更せずに次へ進むことはできません。しかし、パスワードを変更するため利用できるページがありません。あなたのMoodle管理者にご連絡ください。';
$string['ntlmsso_attempting'] = 'NTLM経由でシングルサインオン実行中 ...';
$string['ntlmsso_failed'] = '自動ログインに失敗しました、通常のログインページへの移動を試みます ...';
$string['ntlmsso_isdisabled'] = 'NTLM SSOは無効にされています。';
$string['passwordhandling'] = 'パスワードフィールドの取り扱い';
$string['plaintext'] = 'プレインテキスト';
$string['pluginnotenabled'] = '認証プラグイン「 $a 」が有効にされていません。';
$string['pluginnotinstalled'] = '認証プラグイン「 $a 」がインストールされていません。';
$string['recaptcha'] = 'reCAPTCHA';
$string['rpc_negotiation_timeout'] = 'RPCネゴシエーションタイムアウト';
$string['selfregistration'] = '自己登録';
$string['selfregistration_help'] = '「Eメールによる自己登録」のような認証プラグインが選択された場合、潜在的なユーザに対して、自分自身での登録およびユーザアカウント作成を許可します。この場合、フォーラム投稿、ブログエントリ等でスパムを発信するスパム発信者に対して、アカウントを作成させてしまうことになります。このリスクを避けるには自己登録を無効にするか、「許可されるメールアドレスのドメイン」設定にて、使用できるメールアドレスを制限してください。';
$string['sha1'] = 'SHA-1暗号化';
$string['shib_no_attributes_error'] = 'あなたはShibbolethによりユーザ認証したようですが、Moodleはユーザ属性を受信していません。Moodleが稼動しているサービスプロバイダに対して必要な属性 ($a) をアイデンティティプロバイダが発行しているか確認、またはこのサーバの管理者に連絡してください。';
$string['shib_not_all_attributes_error'] = 'あなたの場合、存在していないShibboleth属性をMoodleが必要としているようです。属性は次のとおりです: $a<br />このサーバの管理者またはアイデンティティプロバイダにご連絡ください。';
$string['shib_not_set_up_error'] = 'Shibboleth環境変数がこのページに存在していないため、Shibboleth認証が正しく設定されていないようです。Shibboleth認証の設定に関するさらなる情報は<a href=\"README.txt\">README</a>を参照、またはこのMoodleをインストールした管理者に連絡してください。';
$string['showguestlogin'] = 'あなたはログインページのゲストログインボタンを表示または非表示にできます。';
$string['sso_idp_description'] = 'このサービスを公開することで、あなたのユーザは再度ログインせずに $a のMoodleサイトを散策することができます。<ul><li><em>従属関係</em>: あなたは $a のSSO (サービスプロバイダ) サービスに<strong>登録</strong>する必要があります。</li></ul><br />このサービスに登録することで、$a からの認証済みユーザは再度ログインせずにあなたのサイトにアクセスできます。<ul><li><em>従属関係</em>: あなたは $a にSSO (サービスプロバイダ) サービスを<strong>公開</strong>する必要があります。</li></ul><br />';
$string['sso_idp_name'] = 'SSO (アイデンティティプロバイダ)';
$string['sso_mnet_login_refused'] = 'ユーザ名 $a[0] は$a[1] からのログインを許可されていません。';
$string['sso_sp_description'] = 'このサービスを公開することで、$a からの認証済みユーザは再度ログインせずにあなたのサイトにアクセスできます。<ul><li><em>従属関係</em>: あなたは $a のSSO (アイデンティティプロバイダ) サービスに<strong>登録</strong>する必要があります。</li></ul><br />このサービスに登録することで、あなたのユーザは再度ログインせずに $a のMoodleサイトを散策することができます。<ul><li><em>従属関係</em>: あなたは $a にSSO (アイデンティティプロバイダ) サービスを<strong>公開</strong>する必要があります。</li></ul><br />';
$string['sso_sp_name'] = 'SSO (サービスプロバイダ)';
$string['stdchangepassword'] = '標準パスワード変更ページを使用する';
$string['stdchangepassword_expl'] = '外部認証システムがMoodleにパスワードの変更を許可する場合、この設定を「Yes」にしてください。この設定は「パスワード変更URI」をオーバーライドします。';
$string['stdchangepassword_explldap'] = '注意: LDAPサーバがリモートの場合、SSL暗号化トンネル (ldaps://) の使用をお勧めします。';
$string['unlocked'] = 'ロックしない';
$string['unlockedifempty'] = '空の場合はロックしない';
$string['update_never'] = 'しない';
$string['update_oncreate'] = '作成時';
$string['update_onlogin'] = '毎回ログイン時';
$string['update_onupdate'] = '更新時';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() は選択したユーザタイプをサポートしていません: $a';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() は選択したユーザタイプをまだサポートしていません。';
$string['auth_dbrevive'] = 'レビューユーザ $a[0] ID $a[1]'; // ORPHANED

?>
