<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => ' ',
            'name'                         => 'Name',
            'name_helper'                  => ' ',
            'email'                        => 'Email',
            'email_helper'                 => ' ',
            'email_verified_at'            => 'Email verified at',
            'email_verified_at_helper'     => ' ',
            'password'                     => 'Password',
            'password_helper'              => ' ',
            'roles'                        => 'Roles',
            'roles_helper'                 => ' ',
            'remember_token'               => 'Remember Token',
            'remember_token_helper'        => ' ',
            'created_at'                   => 'Created at',
            'created_at_helper'            => ' ',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => ' ',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => ' ',
            'approved'                     => 'Approved',
            'approved_helper'              => ' ',
            'verified'                     => 'Verified',
            'verified_helper'              => ' ',
            'verified_at'                  => 'Verified at',
            'verified_at_helper'           => ' ',
            'verification_token'           => 'Verification token',
            'verification_token_helper'    => ' ',
            'two_factor'                   => 'Two-Factor Auth',
            'two_factor_helper'            => ' ',
            'two_factor_code'              => 'Two-factor code',
            'two_factor_code_helper'       => ' ',
            'two_factor_expires_at'        => 'Two-factor expires at',
            'two_factor_expires_at_helper' => ' ',
        ],
    ],
    'cour' => [
        'title'          => 'Cours',
        'title_singular' => 'Cour',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'nom'                => 'Nom',
            'nom_helper'         => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'cover'              => 'Cover',
            'cover_helper'       => ' ',
            'auteur'             => 'Auteur',
            'auteur_helper'      => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'section' => [
        'title'          => 'Sections',
        'title_singular' => 'Section',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'label'             => 'Label',
            'label_helper'      => ' ',
            'cours'             => 'Cours',
            'cours_helper'      => ' ',
            'position'          => 'Position',
            'position_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'lesson' => [
        'title'          => 'lessons',
        'title_singular' => 'lesson',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'label'             => 'Label',
            'label_helper'      => ' ',
            'section'           => 'Section',
            'section_helper'    => ' ',
            'position'          => 'Position',
            'position_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'quiz' => [
        'title'          => 'Quizs',
        'title_singular' => 'Quiz',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'nom'               => 'Nom',
            'nom_helper'        => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'lesson'             => 'lesson',
            'lesson_helper'      => ' ',
        ],
    ],
    'quizQuestion' => [
        'title'          => 'Quiz Questions',
        'title_singular' => 'Quiz Question',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'quiz'              => 'Quiz',
            'quiz_helper'       => ' ',
            'question'          => 'Question',
            'question_helper'   => ' ',
            'ordre'             => 'Ordre',
            'ordre_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'questionReponse' => [
        'title'          => 'Question Reponse',
        'title_singular' => 'Question Reponse',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'question'           => 'Question',
            'question_helper'    => ' ',
            'reponse'            => 'Reponse',
            'reponse_helper'     => ' ',
            'est_correct'        => 'Est Correct',
            'est_correct_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'utilisateurReponse' => [
        'title'          => 'Utilisateur Reponses',
        'title_singular' => 'Utilisateur Reponse',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'utilisateur'        => 'Utilisateur',
            'utilisateur_helper' => ' ',
            'reponse'            => 'Reponse',
            'reponse_helper'     => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'scoreQuiz' => [
        'title'          => 'Score Quizs',
        'title_singular' => 'Score Quiz',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'lesson'              => 'lesson',
            'lesson_helper'       => ' ',
            'quiz'               => 'Quiz',
            'quiz_helper'        => ' ',
            'utilisateur'        => 'Utilisateur',
            'utilisateur_helper' => ' ',
            'score'              => 'Score',
            'score_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'progression' => [
        'title'          => 'Progressions',
        'title_singular' => 'Progression',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'utilisateur'         => 'Utilisateur',
            'utilisateur_helper'  => ' ',
            'lesson'               => 'lesson',
            'lesson_helper'        => ' ',
            'est_complete'        => 'Est Complete',
            'est_complete_helper' => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'commentaire' => [
        'title'          => 'Commentaires',
        'title_singular' => 'Commentaire',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'lesson'              => 'lesson',
            'lesson_helper'       => ' ',
            'utilisateur'        => 'Utilisateur',
            'utilisateur_helper' => ' ',
            'commentaire'        => 'Commentaire',
            'commentaire_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'date_time'          => 'Date Time',
            'date_time_helper'   => ' ',
            'parent'             => 'Parent',
            'parent_helper'      => ' ',
        ],
    ],
    'contenu' => [
        'title'          => 'Contenus',
        'title_singular' => 'Contenu',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'lesson'              => 'lesson',
            'lesson_helper'       => ' ',
            'ordre'              => 'Ordre',
            'ordre_helper'       => ' ',
            'type'               => 'Type',
            'type_helper'        => ' ',
            'id_type'            => 'Id Type',
            'id_type_helper'     => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'video' => [
        'title'          => 'Videos',
        'title_singular' => 'Video',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'video'             => 'Video',
            'video_helper'      => ' ',
            'miniature'         => 'Miniature',
            'miniature_helper'  => ' ',
            'contenu'           => 'Contenu',
            'contenu_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'userAlert' => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],

];
