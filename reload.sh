#!/bin/bash
rm lib/form/doctrine/base/Base*
rm lib/filter/doctrine/base/*
rm lib/model/doctrine/base/Base* 
rm data/sql/schema.sql
./symfony cc
./symfony doctrine:build --all --and-load --no-confirmation

