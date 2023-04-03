#!/bin/bash
echo bonjourr
# Get all entity namespaces
entities=$(php bin/console debug:autowiring --all | grep Entity\\\\ | awk '{print $1}' | sort -u)

# Generate repository classes for each entity
for entity in $entities; do
    echo hi
done
