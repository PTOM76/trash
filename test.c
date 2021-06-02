#include <stdio.h>

int main(void) {
  int i, h, w;
  w = 5;
  for (i = 1; i <= w; i++) {
    for (h = 1; h <= w - i; h++) {
      printf(" ");
    }

    for (h = 1; h <= i; h++) {
      printf("口");
    }

    printf("\n");
  }
  return 0;
}
