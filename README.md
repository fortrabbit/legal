# fortrabbit legal documents

Ever wondered, what actually have changed in that terms? Well, we too. We believe in transparency. See a diff and a version history of our terms and other legal documents. What has been changed, when, why, who did it?

## Contributing

This is a read-only repo for obvious reasons. Pull requests in favor for "better" terms will most likely be rejected, typos are welcome!

## How this is integrated

This is the original source of text. We include this repo as a Git subtree in the App which finally will render all this and a bunch of other stuff in our front facing marketing website: https://www.fortrabbit.com. Example Git subtree usage for our case:

```bash
# 1 — initialize
git subtree add --prefix resources/views/legal git@github.com:fortrabbit/legal master

# 2 — pull
git subtree pull --prefix resources/views/legal git@github.com:fortrabbit/legal master

# 3 — push
git subtree push --prefix resources/views/legal git@github.com:fortrabbit/legal master
```

Probably use the `--squash` parameter on all of the above.


## License

Do what ever you want with it. Fork and reuse for your own project.
