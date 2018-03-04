<?php
/*************************************************************
This file is distributed under the PrivMX Web Freeware License
See LICENSE.TXT in the main folder of the software package
or https://privmx.com/web-freeware-license
Copyright (c) 2017 Simplito Sp. z o.o.
**************************************************************/

global $_PRIVMX_GLOBALS;

$_PRIVMX_GLOBALS["error_codes"] = array(
    "PARSE_ERROR"                          => array("code" => -32700, "message" => "Parse error"),
    "INVALID_REQUEST"                      => array("code" => -32600, "message" => "Invalid Request"),
    "METHOD_NOT_FOUND"                     => array("code" => -32601, "message" => "Method not found"),
    "INVALID_PARAMS"                       => array("code" => -32602, "message" => "Invalid params"),
    "INTERNAL_ERROR"                       => array("code" => -32603, "message" => "Internal error"),
    "NOT_YET_INSTALLED"                    => array("code" => -32604, "message" => "Not yet installed"),
    "ONLY_POST_METHOD_ALLOWED"             => array("code" => -32605, "message" => "Only post method allowed"),
    
    "UNKNOWN_ERROR"                        => array("code" => 0x0001, "message" => "Unkown error"),
    "INVALID_USERNAME"                     => array("code" => 0x0002, "message" => "Invalid username"),
    "INVALID_SALT"                         => array("code" => 0x0003, "message" => "Invalid salt"),
    "INVALID_VERIFIER"                     => array("code" => 0x0004, "message" => "Invalid verifier"),
    "INVALID_PRIV_DATA"                    => array("code" => 0x0005, "message" => "Invalid private data"),
    "INVALID_IDENTITY_KEY"                 => array("code" => 0x0006, "message" => "Invalid identity key"),
    "USER_ALREADY_EXISTS"                  => array("code" => 0x0007, "message" => "User already exists"),
    "INVALID_SIGNATURE"                    => array("code" => 0x0008, "message" => "Invalid signature"),
    "USER_DOESNT_EXIST"                    => array("code" => 0x0009, "message" => "User doesn't exist"),
    "INVALID_USER_ENTRY"                   => array("code" => 0x000B, "message" => "Invalid user entry"),
    "UNKNOWN_SESSION"                      => array("code" => 0x000C, "message" => "Unknown session"),
    "INVALID_SESSION_STATE"                => array("code" => 0x000D, "message" => "Invalid session state"),
    "INVALID_A"                            => array("code" => 0x000E, "message" => "Invalid A"),
    "DIFFERENT_M1"                         => array("code" => 0x000F, "message" => "Different M1"),
    "INVALID_PIN"                          => array("code" => 0x0010, "message" => "Invalid PIN"),
    "OPEN_REGISTRATION_DISABLED"           => array("code" => 0x0011, "message" => "Open registration disabled"),
    "MAX_PIN_ATTEMPTS_EXCEEDED"            => array("code" => 0x0012, "message" => "Max PIN attempts exceeded"),
    "USER_ALREADY_ACTIVATED"               => array("code" => 0x0013, "message" => "User already activated"),
    "INVITATION_DISABLED"                  => array("code" => 0x0014, "message" => "Invitation disabled"),
    "INVALID_TOKEN"                        => array("code" => 0x0015, "message" => "Invalid token"),
    "MAX_SIZE_OF_BLOCK_BULK_EXCEEDED"      => array("code" => 0x0016, "message" => "Max size of block bulk exceeded"),
    "INVALID_BID"                          => array("code" => 0x0017, "message" => "Invalid bid"),
    "INVALID_DATA"                         => array("code" => 0x0018, "message" => "Invalid data"),
    "BLOCK_DOESNT_EXIST"                   => array("code" => 0x0019, "message" => "Block doesn't exist"),
    "MAX_SIZE_OF_DESCRIPTOR_BULK_EXCEEDED" => array("code" => 0x001A, "message" => "Max size of descriptor bulk exceeded"),
    "INVALID_DESCRIPTOR_SIGNATURE_PAIR"    => array("code" => 0x001B, "message" => "Invalid pair descriptor:signature"),
    "INVALID_DID"                          => array("code" => 0x001C, "message" => "Invalid did"),
    "DESCRIPTOR_DOESNT_EXIST"              => array("code" => 0x001D, "message" => "Descriptor doesn't exist"),
    "INVALID_DPUB58"                       => array("code" => 0x001E, "message" => "Invalid dpub58"),
    "INVALID_JSON_PARAMETERS"              => array("code" => 0x001F, "message" => "Invalid json parameters"),
    "DPUB58_DOESNT_MATCH_TO_DID"           => array("code" => 0x0020, "message" => "Dpub58 doesn't match to did"),
    "PUBLIC_KEY_CANNOT_BE_CHANGED"         => array("code" => 0x0021, "message" => "Public key cannot be changed"),
    "OLD_SIGNATURE_DOESNT_MATCH"           => array("code" => 0x0022, "message" => "Old signature doesn't match"),
    "INVALID_OWNER"                        => array("code" => 0x0023, "message" => "Invalid owner"),
    "INVALID_OWNER_SIGNATURE"              => array("code" => 0x0024, "message" => "Invalid owner signature"),
    "INVALID_SID"                          => array("code" => 0x0025, "message" => "Invalid sid"),
    "INVALID_CREATE_SIGNATURE"             => array("code" => 0x0026, "message" => "Invalid create signature"),
    "SINK_DOESNT_EXISTS"                   => array("code" => 0x0027, "message" => "Sink doesn't exist"),
    "INVALID_TIMESTAMP"                    => array("code" => 0x0028, "message" => "Invalid timestamp"),
    "INVALID_NONCE"                        => array("code" => 0x0029, "message" => "Invalid nonce"),
    "INVALID_MID"                          => array("code" => 0x002A, "message" => "Invalid mid"),
    "MESSAGE_DOESNT_EXISTS"                => array("code" => 0x002B, "message" => "Message doesn't exists"),
    "MAX_SIZE_OF_MESSAGE_BULK_EXCEEDED"    => array("code" => 0x002C, "message" => "Max size of message bulk exceeded"),
    "INVALID_HASHMAIL"                     => array("code" => 0x002D, "message" => "Invalid hashmail"),
    "INVALID_USER_PRESENCE"                => array("code" => 0x002E, "message" => "Invalid user presence"),
    "INVALID_SINK_ACL"                     => array("code" => 0x002F, "message" => "Invalid sink acl"),
    "ACCESS_DENIED"                        => array("code" => 0x0030, "message" => "Access denied"),
    "INVALID_STATE"                        => array("code" => 0x0031, "message" => "Invalid state"),
    "SINK_ALREADY_EXISTS"                  => array("code" => 0x0032, "message" => "Sink already exists"),
    "INVALID_MOD_SEQ"                      => array("code" => 0x0033, "message" => "Invalid mod seq"),
    "DESCRIPTOR_ALREADY_EXISTS"            => array("code" => 0x0034, "message" => "Descriptor already exists"),
    "INVALID_LOGIN_DATA"                   => array("code" => 0x0035, "message" => "Invalid login data"),
    "INVALID_HOST"                         => array("code" => 0x0036, "message" => "Invalid host"),
    "INVALID_DESCRIPTOR_LOCK"              => array("code" => 0x0037, "message" => "Invliad descriptor lock"),
    "DESCRIPTOR_LOCKED"                    => array("code" => 0x0038, "message" => "Descriptor locked"),
    "INVALID_EMAIL"                        => array("code" => 0x0039, "message" => "Invalid email"),
    "INVALID_LANGUAGE"                     => array("code" => 0x003A, "message" => "Invalid language"),
    "INVALID_DESCRIPTION"                  => array("code" => 0x003B, "message" => "Invalid description"),
    "MAX_USERS_COUNT_EXCEEDED"             => array("code" => 0x003C, "message" => "Max users count exceeded"),
    "LOGIN_BLOCKED"                        => array("code" => 0x003D, "message" => "Login blocked"),
    "INVALID_SMTP_CONFIG"                  => array("code" => 0x003E, "message" => "Invalid SMTP config"),
    "CANNOT_SAVE_CONFIG"                   => array("code" => 0x003F, "message" => "Cannot save config"),
    "LOGIN_REJECTED"                       => array("code" => 0x0040, "message" => "Login rejected"),
    "HOST_BLACKLISTED"                     => array("code" => 0x0041, "message" => "Host blacklisted"),
    "INVALID_BLOCK_SOURCE"                 => array("code" => 0x0042, "message" => "Invalid block source"),
    "INVALID_TRANSFER_SESSION"             => array("code" => 0x0043, "message" => "Invalid transfer session"),
    "MAX_COUNT_OF_BLOCKS_EXCEEDED"         => array("code" => 0x0044, "message" => "Max count of blocks exceeded"),
    "SECURE_FORM_VALIDATION_FAILED"        => array("code" => 0x0045, "message" => "Secure form validation callback returned false"),
    "FORBIDDEN_USERNAME"                   => array("code" => 0x0046, "message" => "Forbidden username"),
    "INVALID_DOCUMENT_ID"                  => array("code" => 0x0047, "message" => "Invalid document id"),
    "DOCUMENT_DOESNT_EXISTS"               => array("code" => 0x0048, "message" => "Document doesn't exists"),
    "INVLIAD_PKI_DOCUMENT"                 => array("code" => 0x0049, "message" => "Invalid pki document")
);
