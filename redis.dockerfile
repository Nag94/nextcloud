FROM redis:6.2

HEALTHCHECK CMD ["redis-cli","ping"]