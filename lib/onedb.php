** This file contains an SQLite 2.1 database ** (u��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              �       ��     & ( �table 驱动器 驱动器 3 CREATE TABLE "驱动器" (
  "id" INTEGER NOT NULL,
  "驱动器" text,
  "token_type" TEXT,
  "scope" TEXT,
  "expires_in" integer,
  "ext_expires_in" integer,
  "access_token" TEXT,
  "refre           ��    " 2 4 �table 驱动器_copy1 驱动器_copy1 5 CREATE TABLE "驱动器_copy1" (
  "id" INTEGER NOT NULL,
  "驱动器" text,
  "token_type" TEXT,
  "scope" TEXT,
  "expires_in" integer,
  "ext_expires_in" integer,
  "access_tok            r �  rtable drives drives 7 CREATE TABLE "drives" (
  "id" INTEGER NOT NULL,
  "uri" TEXT,
  PRIMARY KEY ("id")
)   |                                                                                                                                                                                                                                                                                                                                                                                               4           �  default cn �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              sh_token" TEXT,
  "expires_on" integer,
  "drivestype" TEXT,
  "client_secret" TEXT,
  "client_id" INTEGER,
  "redirect_uri" TEXT,
  "api" TEXT,
  "api_url" TEXT,
  "oauth_url" TEXT,
  PRIMARY KEY ("id")
)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    4           �  default cn �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              en" TEXT,
  "refresh_token" TEXT,
  "expires_on" integer,
  "drivestype" TEXT,
  "client_secret" TEXT,
  "client_id" INTEGER,
  "redirect_uri" TEXT,
  "api" TEXT,
  "api_url" TEXT,
  "oauth_url" TEXT,
  PRIMARY KEY ("id")
)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      