<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'enrol_self', language 'ru', branch 'MOODLE_24_STABLE'
 *
 * @package   enrol_self
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortnonmemberinfo'] = 'Только члены глобальной группы «{$a}» могут самостоятельно записываться.';
$string['cohortonly'] = 'Только члены глобальной группы';
$string['cohortonly_help'] = 'Можно ограничить самостоятельную запись только для членов указанной глобальной группы. Обратите внимание, что изменение этого параметра не влияет на уже записанных участников.';
$string['customwelcomemessage'] = 'Текст приветственного сообщения';
$string['customwelcomemessage_help'] = 'Пользовательские приветственное сообщение может быть добавлен в виде простого текста или авто-формата Moodle, включая HTML-теги и мультиязычные теги.

В сообщение могут быть включены следующие подстановки:
* Название курса - {$a->coursename}
* Ссылка на страницу профиля пользователя - {$a->profileurl}';
$string['defaultrole'] = 'Назначение роли по умолчанию';
$string['defaultrole_desc'] = 'Выберите роль, которая будет назначена самостоятельно записанным пользователям';
$string['editenrolment'] = 'Изменить зачисление';
$string['enrolenddate'] = 'Конечная дата';
$string['enrolenddate_help'] = 'Если параметр включен, то пользователи могут самостоятельно записаться только до этой даты.';
$string['enrolenddaterror'] = 'Дата окончания записи не может быть ранее даты ее начала';
$string['enrolme'] = 'Записаться на курс';
$string['enrolperiod'] = 'Продолжительность обучения';
$string['enrolperiod_desc'] = 'Продолжительность обучения по умолчанию. Если установлен ноль, то, по умолчанию, продолжительность обучения не будет ограничена.';
$string['enrolperiod_help'] = 'Продолжительность обучения, начиная с момента самостоятельной записи пользователя на курс. Если не включать этот параметр, то продолжительность обучения не будет ограничена.';
$string['enrolstartdate'] = 'Начальная дата';
$string['enrolstartdate_help'] = 'При включенном параметре пользователи могут самостоятельно записаться после этой даты.';
$string['expiredaction'] = 'Действие при истечении срока зачисления';
$string['expiredaction_help'] = 'Выберите выполняемое действие при истечении срока записи пользователя в курсе. Обратите внимание, что из курса удаляются некоторые настройки  и данные пользователя при исключении его из курса.';
$string['expirymessageenrolledbody'] = 'Уважаемый(ая) {$a->user}, уведомляем, что обучение в курсе «{$a->course}» истекает {$a->timeend}.

При необходимости свяжитесь с {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Уведомление об истечении срока обучения';
$string['expirymessageenrollerbody'] = 'Самостоятельная запись в курсе «{$a->course}» истекает в течение следующих {$a->threshold} для перечисленных пользователей:

{$a->users}.

Чтобы продлить их обучение, перейдите на {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Уведомление об истечении срока обучения';
$string['groupkey'] = 'Использовать кодовые слова для групп';
$string['groupkey_desc'] = 'Использовать кодовые слова для групп по умолчанию';
$string['groupkey_help'] = 'В дополнение к ограничению доступа к курсу лишь тех, кто знает кодовое слово курса, использование кодового слова группы  позволяет автоматически добавить пользователей в группу при их записи на курс.

Для этого в настройках группы должно быть указано кодовое слово, отличающееся от кодового слова курса.';
$string['longtimenosee'] = 'Исключать неактивных пользователей через';
$string['longtimenosee_help'] = 'Если пользователь долго не заходил на курс, то он будет автоматически исключен через заданный период времени.';
$string['maxenrolled'] = 'Макс. количество пользователей';
$string['maxenrolled_help'] = 'Максимальное количество пользователей, которые могут записаться самостоятельно. 0 означает без ограничений.';
$string['maxenrolledreached'] = 'Было достигнуто максимальное число самостоятельно записавшихся пользователей';
$string['messageprovider:expiry_notification'] = 'Уведомления об истечении срока обучения при самостоятельной записи';
$string['nopassword'] = 'Кодовое слово не требуется.';
$string['password'] = 'Кодовое слово';
$string['password_help'] = 'Кодовое слово позволяет предоставить доступ к курсу только тем, кто знает пароль.

Если поле оставить пустым, то любой пользователь сможет записаться на курс.

Если задано кодовое слово, то любому пользователю при попытке записаться на курс потребуется его ввести. Это нужно будет сделать лишь ОДНАЖДЫ, при записи на курс.';
$string['passwordinvalid'] = 'Неверное кодовое слово, попробуйте еще раз';
$string['passwordinvalidhint'] = 'Введено неверное кодовое слово, попробуйте еще раз<br />(Подсказка - оно начинается с \'{$a}\')';
$string['pluginname'] = 'Самостоятельная запись';
$string['pluginname_desc'] = 'Плагин самостоятельной записи позволяет пользователям самостоятельно записываться на желаемый курс. Курсы могут быть защищены кодовым словом. Внутри системы запись пользователя выполняется через модуль «Зачисление вручную», поэтому он должен быть включен для работы данного модуля.';
$string['requirepassword'] = 'Обязательно использовать кодовое слово';
$string['requirepassword_desc'] = 'Этот параметр отвечает за обязательное использование кодового слова в новых курсах, а также запрещает его отключение в уже созданных.';
$string['role'] = 'Роль, назначаемая по умолчанию';
$string['self:config'] = 'Настраивать самостоятельную запись';
$string['self:manage'] = 'Управлять записанными на курс пользователями';
$string['self:unenrol'] = 'Исключать пользователей из курса';
$string['self:unenrolself'] = 'Исключать себя из курса';
$string['sendcoursewelcomemessage'] = 'Отправлять приветственное сообщение';
$string['sendcoursewelcomemessage_help'] = 'При отмеченном параметре пользователям, самостоятельно записавшимся на курс, будет отправляться приветственное сообщение по электронной почте.';
$string['showhint'] = 'Показывать подсказку';
$string['showhint_desc'] = 'Показывать первую букву кодового слова.';
$string['status'] = 'Разрешить самостоятельную запись';
$string['status_desc'] = 'Разрешить по умолчанию пользователям самостоятельно записываться на курс.';
$string['status_help'] = 'Этот параметр определяет, может ли пользователь записаться на курс (а также исключить себя из курса, если он имеет соответствующее право).';
$string['unenrol'] = 'Исключить пользователя';
$string['unenrolselfconfirm'] = 'Вы действительно хотите исключить себя из курса «{$a}»?';
$string['unenroluser'] = 'Вы действительно хотите исключить пользователя «{$a->user}» из курса «{$a}»?';
$string['usepasswordpolicy'] = 'Использовать политику паролей';
$string['usepasswordpolicy_desc'] = 'Использовать политику паролей для кодовых слов';
$string['welcometocourse'] = 'Добро пожаловать в {$a}';
$string['welcometocoursetext'] = 'Добро пожаловать в курс «{$a->coursename}»!

Если Вы еще не сделали этого, то отредактируйте свой профиль так, чтобы мы узнали больше о Вас:

  {$a->profileurl}';
