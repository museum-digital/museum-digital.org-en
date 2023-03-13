#!/bin/bash
#
# This script builds the page after fetching the required resources.

# Ensure that php is available on the system.

if ! [ -x "$(command -v zola)" ]; then
    echo "This script needs zola installed to run!"
    exit 1;
fi
if ! [ -x "$(command -v php)" ]; then
    echo "This script needs php installed to run!"
    exit 1;
fi

# Load environment and load list of relevant instances.

SCRIPT_DIR="$( cd "$( dirname "$0" )" && pwd )"
cd $SCRIPT_DIR/..

php $SCRIPT_DIR/getJsonAPIs.php
php $SCRIPT_DIR/getRssFeed.php
php $SCRIPT_DIR/updateEvents.php

zola build


