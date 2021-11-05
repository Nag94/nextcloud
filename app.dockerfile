FROM nextcloud:21-apache

RUN set -ex; \
    \
    apt-get update; \
    apt-get install -y --no-install-recommends \
        libmagickcore-6.q16-6-extra \
        procps \
        smbclient \
    ; \
    rm -rf /var/lib/apt/lists/*